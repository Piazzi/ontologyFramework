//console.log(mxUtils.getPrettyXml(ui.editor.getGraphXml()));
//console.log(mxUtils.getXml(ui.editor.getGraphXml()));

/**
 * Gets the XML from the editor after a Cell is moved or connect to another Cell
 * @param xml
 */
function movementCompiler(xml) {

    console.log(xml);
    let parser, xmlDoc;

    parser = new DOMParser();
    xmlDoc = parser.parseFromString(xml, "text/xml");
    let equalClassNamesError = 0;
    let equalRelationNamesError = 0;
    let equalRelationBetweenClassesError = 0;
    let instanceOfBetweenClassesError = 0;
    let wrongRelationError = 0;

    // Starts the XML interpretation send by the editor
    // Each mxCell element is compared to each other to find any measurable error
    // Complexity: O(n^2)
    for (let i = 2; i < xmlDoc.getElementsByTagName("mxCell").length; i++) {
        for (let j = i + 1; j < xmlDoc.getElementsByTagName("mxCell").length; j++) {
            // Shows a error message if two classes or two relations has the same name
            if ((xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("value") ===
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("value")) && (
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("id") !==
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("id")) &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("value") != null &&
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("value") != null) {
                if (xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("edge") == null &&
                    xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("edge") == null) {
                    errorAnimation($("#equalClassNamesError"));
                    equalClassNamesError++;
                } else {
                    errorAnimation($("#equalRelationNamesError"));
                    equalRelationNamesError++;
                }

            }


            // Shows a error message if two classes has the same relation between them more than one time
            if (xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("value") ===
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("value") &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("target") ===
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("target") &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("source") ===
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("source") &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("value") != null &&
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("value") != null &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("target") != null &&
                xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("target") != null) {
                errorAnimation($("#equalRelationsError"));
                equalRelationBetweenClassesError++;
            }

            // Shows a error message if two classes has been connected with the instance_of relation
            if (xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("value") === 'instance_of' &&
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("source") !== null &&
                xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("target") !== null) {
                // get the ids from the mxCells in the relation
                let domainId = xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("source");
                let rangeId = xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("target");
                let domainClass, rangeClass;

                // Look for the two mxCells using the ids
                for (let i = 2; i < xmlDoc.getElementsByTagName("mxCell").length; i++) {
                    if (xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("id") === domainId)
                        domainClass = xmlDoc.getElementsByTagName("mxCell")[i];
                    if (xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("id") === rangeId)
                        rangeClass = xmlDoc.getElementsByTagName("mxCell")[i];


                }

                // shows a error if the mxCells are two classes
                if (domainClass.getAttribute("style").includes('ellipse') && rangeClass.getAttribute("style").includes('ellipse')) {
                    errorAnimation($("#instanceOfBetweenClassesError"));
                    instanceOfBetweenClassesError++;
                }

            }


            // If the mxCell is a Instance, start searching for his relations. If any relation belonging to the instance it's not a instance_of
            // relation, shows a error message
            if (xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("style").includes('Instance')) {
                for (let k = 0; k < xmlDoc.getElementsByTagName("mxCell").length; k++)
                {
                    if (xmlDoc.getElementsByTagName("mxCell")[k].getAttribute("edge") != null &&
                        xmlDoc.getElementsByTagName("mxCell")[k].getAttribute("value") != 'instance_of')
                    {
                        if (xmlDoc.getElementsByTagName("mxCell")[k].getAttribute("source") == xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("id") ||
                            xmlDoc.getElementsByTagName("mxCell")[k].getAttribute("target") == xmlDoc.getElementsByTagName("mxCell")[j].getAttribute("id"))
                            {
                                wrongRelationError++;
                                errorAnimation($("#wrongRelationError"));
                            }
                    }
                }

            }

        }


        console.log("Classes errors: ");
        console.log(equalClassNamesError);
        console.log("Relation Errors: ");
        console.log(equalRelationNamesError);
        console.log("Wrong Relation error: ");
        console.log(wrongRelationError);


    }

    if (equalClassNamesError === 0)
        $("#equalClassNamesError").hide();
    if (equalRelationNamesError === 0)
        $("#equalRelationNamesError").hide();
    if (equalRelationBetweenClassesError === 0)
        $("#equalRelationsError").hide();
    if (instanceOfBetweenClassesError === 0)
        $("#instanceOfBetweenClassesError").hide();
    if (wrongRelationError === 0)
        $("#wrongRelationError").hide();


}

/**
 * Returns the cell, given the id.
 *
 * @param xmlDoc
 * @param id
 * @returns {*|string}
 */
function getMxCell(xmlDoc, id) {
    for (let i = 2; i < xmlDoc.getElementsByTagName("mxCell").length; i++) {
        if (xmlDoc.getElementsByTagName("mxCell")[i].getAttribute("id") === id)
            return xmlDoc.getElementsByTagName("mxCell")[i];
    }
}

/**
 * Gets the XML from the editor after any property of the cell have been edited
 * @param xml
 */
function propertiesCompiler(xml) {

}

/**
 * Initializes the modal animation of the given error
 * @param modal
 */
function errorAnimation(modal) {
    modal.show();
    modal.animate({opacity: '0.4'}, "slow");
    modal.animate({opacity: '0.8'}, "slow");
    modal.animate({opacity: '0.4'}, "slow");
    modal.animate({opacity: '0.8'}, "slow");
}