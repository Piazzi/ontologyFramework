$(document).ready(function () {
    // Set the tooltips in the homepage

    tippy('#night-mode', {
        content: "Turn ON/OFF the night mode"
    });

    tippy('#control-sidebar', {
        content: "Show/Hide the Sidebar"
    });

    tippy('#open-error-console', {
        content: "Opens the error console"
    });

    tippy('.fa-download', {
        content: "Downloads a .txt file containing all the current warnings in the ontology"
    });

    tippy('#warnings', {
        content: "The number of warnings in your current ontology"
    });

    tippy('.fa-question-circle', {
        content: "Click to see more information!"
    });

    tippy('#classes', {
        content: "The number of classes in your current ontology"
    });

    tippy('#relations', {
        content: "The number of relations in your current ontology"
    });

    tippy('#instances', {
        content: "The number of instances in your current ontology"
    });

    tippy('#download-ontology-report', {
        content: "Download a report with all the information of your current ontology"
    });

});