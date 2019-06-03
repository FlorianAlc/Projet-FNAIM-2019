<?php
ob_start();
?>
    <div class="container">
        <div class="text-center">
            <i class="fa fa-3x fa-info-circle" aria-hidden="true"></i>
            <h1>A propos</h1>
            <br>
        </div>

        <div style="padding-bottom: 20px" class="row">
            <h3 style="border-bottom: 3px solid #f8d61e;">Présentation de la FNAIM</h3>
            <ul>
                <li>Syndicat, marque, regroupement de professionnels... depuis bientôt 70 ans, la Fédération Nationale de l'Immobilier est LA référence du secteur, pour les professionnels, les pouvoirs publics et les consommateurs.</li>
                <li>"Agir pour le logement", agir pour une vision juste et équilibrée de l'immobilier entre propriétaires et locataires, tel est l'objectif qui guide au quotidien les milliers d'adhérents de la FNAIM, partout en France.</li>
                <li>De par son ancienneté et le nombre de ses adhérents, la Fédération Nationale de l’Immobilier est, à l'heure actuelle, la première organisation des professionnels de l’immobilier en France et en Europe.</li>
                <li>Possédant une triple expertise professionnelle, juridique et économique, la FNAIM est l’interlocuteur privilégié des pouvoirs publics.</li>
                <li>Force de proposition reconnue et écoutée sur tous les sujets susceptibles d’avoir des implications décisives dans la pratique des métiers de l’immobilier et la politique du logement, la Fédération Nationale de l’Immobilier est régulièrement amenée à dialoguer avec les instances nationales et européennes.</li>
            </ul>
        </div>

        <div style="padding-bottom: 20px" class="row">
            <h3 style="border-bottom: 3px solid #f8d61e;">Une force syndicale de premier plan</h3>
            <ul>
                <li>Possédant une triple expertise professionnelle, juridique et économique, la FNAIM est l’interlocuteur privilégié des pouvoirs publics.</li>
                <li>Force de proposition reconnue et écoutée sur tous les sujets susceptibles d’avoir des implications décisives dans la pratique des métiers de l’immobilier et la politique du logement, la Fédération Nationale de l’Immobilier est régulièrement amenée à dialoguer avec les instances nationales et européennes.</li>
            </ul>
        </div>

        <div style="padding-bottom: 20px" class="row">
            <h3 style="border-bottom: 3px solid #f8d61e;">Première organisation des professionnels de l’immobilier</h3>
            <ul>
                <li>De par son ancienneté et le nombre de ses adhérents, la Fédération Nationale de l’Immobilier est, à l'heure actuelle, la première organisation des professionnels de l’immobilier en France et en Europe.</li>
                <li>Répartis sur l'ensemble du territoire français, les adhérents FNAIM (13 métiers rassemblés) sont au cœur du marché immobilier : ils assurent notamment, la gestion de plus de 60 % des lots de copropriété et interviennent dans la réalisation d'une transaction sur trois dans l'habitat résidentiel existant.</li>
            </ul>
        </div>

        <div style="padding-bottom: 20px" class="row">
            <h3 style="border-bottom: 3px solid #f8d61e;">Une organisation au plus proche des adhérents</h3>
            <ul>
                <li>La FNAIM a vocation à défendre les intérêts des professionnels de l'immobilier et de leurs clients. À ce titre, elle propose à ses adhérents des prestations pour développer leurs compétences et leur professionnalisme, afin qu'ils accompagnent et sécurisent au mieux les projets immobiliers de leurs clients. Elle les engage d'autre part à respecter une démarche éthique et déontologique à l'égard de tous ceux qui leur font confiance.</li>
                <li>Les représentations locales de la Fédération (21 Chambres FNAIM régionales et 64 Chambres départementales) accueillent les adhérents et mettent également à leur service des prestations spécifiques ; elles sont également le lieu ou l'organisateur de rencontres entre confrères, dont des réunions de formation offrant opportunités d’échanges et d’appropriation de pratiques professionnelles conformes aux exigences croissantes des consommateurs.</li>
            </ul>
        </div>

        <div class="text-center">
            <i class="fas fa-3x fa-envelope"></i>
            <h1>Contact</h1>
            <br>
        </div>

        <div class="row" style="background-color:#f8d61e; padding: 15px; border-radius: 5px;">
           <ul>
               <li><strong>Email :</strong> Florian.projets@gmail.com</li>
               <li><strong>Téléphone :</strong> 01 60 95 73 92</li>
               <li><strong>Adresse du siège sociale :</strong> 129 Rue du Faubourg Saint-Honoré, 75008 Paris</li>
           </ul>
        </div>
    </div>
<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>