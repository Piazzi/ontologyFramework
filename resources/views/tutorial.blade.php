@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <div class="box box-solid">
        <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Sumário</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ol>
                <a href="#intro">
                    <li>O que é o ONTO FOR ALL?</li>
                </a>
                <a href="#conceitos-basicos"><li>Conceitos básicos</li></a>
                    <ol>
                        <a href="#class"><li>Classe</li></a>
                        <a href="#relations"><li>Relação</li></a>
                        <li>Ligação</li>
                        <a href="#properties"><li>Propriedades</li></a>
                        <li>Cardinalidade</li>
                        <a href="#colors"><li>Cores</li></a>
                        <a href="#save"><li>Salvar</li></a>
                        <li>Download</li>
                        <li>Exportar</li>
                        <a href="#import"><li>Importar</li></a>
                    </ol>
                </li>

                <a href="#interface-do-editor"><li>Interface do Editor</li></a>
                    <ol>
                        <a href="#diagram"><li>Diagrama</li></a>
                        <a href="#rules"><li>Barra de regras</li></a>
                        <a href="#tips"><li>Dicas</li></a>
                        <a href="#ontology-palette"><li>Paleta de ontologias</li></a>
                        <a href="#other-palettes"><li>Outras paletas</li></a>
                        <li>Histórico de Ontologias</li>
                    </ol>
                </li>
                <li>Gerenciamento de Ontologias
                    <ol>
                        <li>Ontologias</li>
                        <li>Ontologias favoritas</li>
                        <li>Ações</li>
                    </ol>
                </li>
                <li>Exemplos</li>
                <li>Atalhos</li>
                <li>Ferramentas Utilizadas</li>
                <li>Créditos</li>
            </ol>
        </div>
        <!-- /.box-body -->
    </div>
@stop

@section('content')
    <div id="intro" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">O que é o ONTO4ALL?</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dd>Onto4All é um editor gráfico capaz de criar, editar e exportar ontologias sendo orientado por uma
                    aba de regras de construção ontológica e por uma paleta extensa de classes e relações ontológicas.

                </dd>
                <dd>
                    Os formatos de exportação são: OWL,XML, SVG.
                </dd>
            </dl>
        </div>
        <!-- /.box-body -->
    </div>

    <h2 id="conceitos-basicos">Conceitos básicos</h2>
    <div id="class" class="box box-solid">
        <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Classe</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dd>No Onto4All a classe é definida pelo circulo contido dentro da paleta de ontologias.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/class.png">
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Ela representa a própria classe de uma ontologia.</li>
                            <li>É possível nomea-la ao se clicar duas vezes em seu interior <span class="label-danger">Atenção: Você não deve colocar espaços no seu nome, apenas use Letras maiúsculas e minúsculas e número de 0 a 9</span></li>
                            <p> Exemplos: <span class="label-success">PizzaDeCalabresa, CarroAutomatico, usuario</span> </p>
                            <li>É possível expandir seu tamanho passando o mouse por cima do círculo e puxando sua borda. </li>
                            <li>É possível trocar as cores (do interior e da borda). </li>
                            <li>É possível liga-la a outras classes usando as <a href="#relations">relações</a>.</li>
                            <li>É possível acessar suas propriedades selecionando a classe e pressionando <strong>CTRL+M</strong> ou clicando nela com o botão direito do mouse e selecionando a opção <strong>Edit Properties</strong></li>
                            <li>É possível joga-la para dentro do diagrama apenas clicando no seu simbolo na paleta de ontologias</li>
                            <li>Clicando com o botão direito do mouse em cima de uma classe irá fazer aparecer um menu com diversas opções</li>
                        </ul>
                    </div>
                </div>
            </dl>
        </div>
        <!-- /.box-body -->
    </div>

    <div id="relations" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Relação</h3>
        </div>
        <div class="box-body">
            <dd>Em ontologias, relações entre classes especificam como elas estão relacionados com as demais classes da ontologia. </dd>
            <dd>Grande parte da praticidade de ontologias vem da sua capacidade de descrever relações. </dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>No Onto4All, existem diversos tipos de relações, que se encontram na paleta de ontologias, à esquerda da tela principal.</li>
                            <li>Um dos principais tipos de relações são: <i>is_a</i>, <i>part_of</i>, <i>has_part</i>, <i>contains</i> e <i>instance_of</i> </li>
                            <li>É possível criar uma nova relação entre duas classes e nomeá-la manualmente, clicando em <i>new_relation</i>. </li>
                            <li>Relações costumam ter um sentido, isto é, apontar de uma classe para outra.</li>
                            <li>É possível inverter o sentido de uma relação, clicando nela com o botão direito do mouse e selecionando <strong>Reverse</strong></li>
                            <li>É possível selecionar outras opções da relação clicando nela com o botão direito, como deletá-la, duplicá-la ou copiá-la.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/relations.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="properties" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Propriedades</h3>
        </div>
        <div class="box-body">
            <dd>No Onto4All, cada elemento da paleta de ontologias possui propriedades, que podem ser visualizadas e editadas.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Para editar as propriedades de um elemento, clique nele com o botão direito do mouse e selecione "Edit Properties".</li>
                            <li>Também pode-se acessar o menu de edição de propriedades de um elemento selecionado com o atalho <strong>Ctlr+M</strong></li>
                            <li>É possível adicionar uma nova propriedade a um elemento, descendo a barra de rolagem do menu de propriedades e selecionando "Add Property".</li>
                            <li>A primeira propriedade do menu de propriedade, o ID, corresponde a um identificador único de cada elemento presente no diagrama.</li>
                            <li>As propriedades podem ser usadas para detalhar aspectos daquele elemento ou para fazer anotações, como as propriedades <i>exampleOfUsage</i> e <i>comments</i>.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/properties.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="colors" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Cores</h3>
        </div>
        <div class="box-body">
            <dd>A ferramenta Onto4ALL permite que o usuário customize facilmente as cores dos elementos do diagrama.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Para alterar a cor de um elemento selecionado, clique no ícone do balde de tinta para abrir o menu de seleção de cores.</li>
                            <li>No menu de seleção de cores, selecione uma cor através da interface ou então digitando o código hexadecimal da cor desejada.</li>
                            <li>Também é possível alterar a cor das linhas de contorno ou dos próprios elementos de <a href="#relations">relações</a>, clicando no ícone do lápis de cor.</li>
                            <li>Em ontologias muito grandes, cores podem facilitar o agrupamento de elementos de acordo com dadas características, para melhor organizar o diagrama.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/colors.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="save" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Salvar</h3>
        </div>
        <div class="box-body">
            <dd>É possível salvar as ontologias desenvolvidas no Onto4All.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Clicando em <i>Save</i>, no menu <i>File</i>, pode-se salvar a ontologia criada no formato padrão XML.</li>
                            <li>Desta forma, o download do arquivo será inicializado automaticamente.</li>
                            <li>Também é possível exportar a ontologia em outros formatos, inclusive no formato OWL (Ontology Web Language)
                            ou em SVG (para salvar apenas a imagem da ontologia criada), clicando em <i>Export</i>, dentro do mesmo menu.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/saving-ontology.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="import" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Importar</h3>
        </div>
        <div class="box-body">
            <dd>Você também pode importar ontologias que já estão salvas no seu computador para o Onto4All!.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Clicando em <i>Import</i>, no menu <i>File</i>, pode-se carregar uma ontologia de seu computador no formato XML.</li>
                            <li>Uma vez carregada a ontologia, é possível editá-la e salvá-la ao seu computador novamente.</li>
                            <li>Após editar uma ontologia importada no formasto XML, é possível exportá-la também nos outros formatos suportados (OWL e SVG).</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/importing-ontology.png">
                    </div>
                </div>
        </div>
    </div>

    <h2 id="interface-do-editor">Interface do Editor</h2>

    <div id="diagrama" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Diagrama</h3>
        </div>
        <div class="box-body">
            <dd>Ao fazer login em Onto4All, você será redirecionado para a página princial: o diagrama de construção de ontologias.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Esta é a página principal do Onto4All, em que você poderá desenvolver suas próprias ontologias e editar ontologias já existentes no seu computador,
                            usufruindo de todas as funcionalidades apresentadas na seção anterior.</li>
                            <li>Para acessar esta página, você pode clicar em <strong>Ontology drawing</strong> ou na logo <strong>Onto4ALL</strong>,
                            na barra de navegação no topo da página.</li>
                            <li>Ao clicar no botão <strong>Hide sidebar</strong>, será exibida uma aba de configurações adicionais do
                            diagrama, como a espessura das linhas do background (grid), cores e orientação da tela (retrato ou paisagem).</li>
                            <li>Na barra de configurações do diagrama, logo abaixo da barra de navegação, encontram-se diversas ferramentas disponíveis,
                            como opções de visualização, zoom e inserir imagens.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/diagrama.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="rules" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Barra de Regras</h3>
        </div>
        <div class="box-body">
            <dd>Ao lado direito do diagrama, se encontra a barra de regras, que contém anotações que auxiliam o usuário a manipular as ferramentas do Onto4All.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Inicialmente, todas as regras cadastradas são exibidas na barra de regras.</li>
                            <li>Ao clicar em um elemento na <a href="#palet">paleta de ontologias</a>, apenas as regras relacionadas àquele elemento
                            serão exibidas na barra de regras.</li>
                            <li>Através do campo de pesquisa na barra de regras, é possível encontrar regras relacionadas a um elemento específico,
                            digitando o seu nome.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <img alt="class image" src="/css/images/rule1.png">
                    </div>
                    <div class="col-md-3">
                        <img alt="class image" src="/css/images/rule2.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="tips" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Dicas</h3>
        </div>
        <div class="box-body">
            <dd>Ao chegar na página do diagrama, serão exibidas, no canto inferior esquerdo, algumas dicas de uso do Onto4All.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Ao fechar uma dica, uma outra dica irá ser exibida no lugar da anterior.</li>
                            <li>Ao clicar no botão <strong>Hide Tips</strong>, no canto superior direito, as dicas serão fechadas.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/tip.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="ontology-palette" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Paleta de ontologias</h3>
        </div>
        <div class="box-body">
            <dd>No canto esquerdo, se encontra <strong>Paleta de ontologias</strong>, que contém os principais elementos necessários para a construção de uma ontologia.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Na paleta de ontologias, encontram-se, dentre outros elementos, classes e relações, citadas anteriormente neste tutorial.</li>
                            <li>Além de classes e relações, a paleta de ontologias disponibiliza também a opção de inserir textos no diagrama.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/ontology-palette.png">
                    </div>
                </div>
        </div>
    </div>

    <div id="other-palettes" class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Outras paletas</h3>
        </div>
        <div class="box-body">
            <dd>Além da <a href="#ontology-palette">paleta de ontologias</a>, existem paletas alternativas de elementos que podem ser usadas no diagrama.</dd>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>As paletas alternativas são a de flechas (<i>arrow</i>), a de UML, a de BPMN (<i>Business Process Model and Notation</i>) e a de ícones (clipart).</li>
                            <li>Assim como os elementos da paleta de ontologias, para inserir um elemento de outra paleta no diagrama, basta clicar em cima dele.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img alt="class image" src="/css/images/ontology-palette.png">
                    </div>
                </div>
        </div>
    </div>
@stop
