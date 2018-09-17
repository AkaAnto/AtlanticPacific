var lang = localStorage.getItem("lParam");
if (!lang) {lang = "es"};

addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}


// Nav bar
switch(lang) {
    case "en":
        $("#topInicio").text("Home");
        $("#topNosotros").text("About Us");
        $("#topServicios").text("Services");
        $("#topGaleria").text("Gallery");
        $("#topContactenos").text("Contact Us");
        break;
    case "fr":
        $("#topInicio").text("Accueil");
        $("#topNosotros").text("Nous");
        $("#topServicios").text("Services");
        $("#topGaleria").text("Galerie");
        $("#topContactenos").text("Contactez-nous");
        break;
    case "po":
        $("#topInicio").text("Home");
        $("#topNosotros").text("Nós");
        $("#topServicios").text("Serviços");
        $("#topGaleria").text("Galeria");
        $("#topContactenos").text("Contate-Nos");
        break;
    case "it":
        $("#topInicio").text("Home");
        $("#topNosotros").text("Noi");
        $("#topServicios").text("Servizi");
        $("#topGaleria").text("Galleria");
        $("#topContactenos").text("Contattaci");
        break;
    case "de":
        $("#topInicio").text("Startseite");
        $("#topNosotros").text("Über uns");
        $("#topServicios").text("Dienstleistungen");
        $("#topGaleria").text("Galerie");
        $("#topContactenos").text("Kontaktiere Uns");
        break;
};

// Banner
switch(lang) {
    case "en":
        $("#bannerText").html("Transport and<br>Marine<br>Logistics Solutions");
        $("#bannerButton").text("Contact Us");
        break;
    case "fr":
        $("#bannerText").html("Solutions de<br>transport et<br>logistique maritime");
        $("#bannerButton").text("Contactez-nous");
        break;
    case "po":
        $("#bannerText").html("Soluções de<br>Transporte e<br>Logística Marinha");
        $("#bannerButton").text("Contate-Nos");
        break;
    case "it":
        $("#bannerText").html("Soluzioni di<br>Trasporti e<br>Logistica marina");
        $("#bannerButton").text("Contattaci");
        break;
    case "de":
        $("#bannerText").html("Transport- und Marinelogistik-Lösungen");
        $("#bannerButton").text("Kontaktiere uns");
        break;
};

// Stats
switch(lang) {
    case "es":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Bienvenidos");
        break;

    case "en":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Welcome");
        break;

    case "po":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Bem vindo");
        break;

    case "fr":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Bienvenue");
        break;

    case "it":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Benvenuto");
        break;

    case "de":
        $("#bienvenido").html("<span class='font-weight-bold text-center'>APSL</span>Willkommen");
        break;
};
switch(lang) {
    case "en":
        $("#nosotros").html("Atlantic Pacific Shipping Line is a proprietary marine, transport and logistics solutions company that offers services in national and international markets through operational business lines: Roads (Containers), Ferries, Logistics, Marine Contract Solutions, Oil transportation in the high seas as well as the transport, distribution and sale of oil.");
        break;
    case "fr":
        $("#nosotros").html("Atlantic Pacific Shipping Line est une société de solutions, de transport et de logistique détenue et exploitée par des marins qui offre des services sur les marchés nationaux et internationaux à travers des lignes opérationnelles: routes (conteneurs), ferries, logistique, solutions de contrat maritime, Le transport du pétrole en haute mer ainsi que le transport, la distribution et la vente de pétrole.");
        break;
    case "po":
        $("#nosotros").html("A Atlantic Pacific Shipping Line é uma empresa proprietária de transporte e logística de propriedade e operação marítima que oferece serviços nos mercados nacional e internacional por meio de linhas de negócios operacionais: Estradas (Containers), Ferries, Logística, Soluções para Contratos Marítimos, Transporte de petróleo no alto mar, bem como o transporte, distribuição e venda de petróleo.");
        break;
    case "it":
        $("#nosotros").html("Atlantic Pacific Shipping Line è una società di proprietà e trasporto, logistica e logistica proprietaria marina che offre servizi sui mercati nazionali e internazionali attraverso linee operative: Strade (Container), Traghetti, Logistica, Soluzioni per contratti marittimi, Trasporto di petrolio in alto mare, trasporto, distribuzione e vendita di petrolio.");
        break;
    case "de":
        $("#nosotros").html("Atlantic Pacific Shipping Line ist eine proprietäre Marine -, Transport - und Logistik - Lösung, die Dienstleistungen in nationalen und internationalen Märkten durch operative Geschäftsbereiche anbietet: Straßen (Container), Fähren, Logistik, Marine Contract Solutions, Öltransport auf hoher See sowie die Transport, Vertrieb und Verkauf von Öl.");
        break;
};


// Middle section
switch(lang) {
    case "en":
        $("#apoyamos").html("We support the primary business segments with centralized corporate operations, which include purchasing, human resources, information technology, public relations and advertising, training, travel and facilities development.");
        break;
    case "fr":
        $("#apoyamos").html("Nous soutenons les principaux secteurs d'activité avec des opérations d'entreprise centralisées, qui comprennent les achats, les ressources humaines, la technologie de l'information, les relations publiques et la publicité, la formation, les voyages et le développement des installations.");
        break;
    case "po":
        $("#apoyamos").html("Apoiamos os principais segmentos de negócios com operações corporativas centralizadas, que incluem compras, recursos humanos, tecnologia da informação, relações públicas e publicidade, treinamento, viagens e desenvolvimento de instalações.");
        break;
    case "it":
        $("#apoyamos").html("Supportiamo i segmenti di business primari con operazioni aziendali centralizzate, che comprendono acquisti, risorse umane, tecnologie informatiche, relazioni pubbliche e pubblicità, formazione, sviluppo di viaggi e strutture.");
        break;
    case "de":
        $("#apoyamos").html("Wir unterstützen die primären Geschäftsbereiche mit zentralisierten Unternehmensabläufen, darunter Einkauf, Personalwesen, Informationstechnologie, Öffentlichkeitsarbeit und Werbung, Ausbildung, Reise- und Anlagenentwicklung.");
        break;
};


// Services
switch(lang) {
    case "es":
        $("#nServicios").html("<span class='font-weight-bold text-center'>S</span>Nuestros Servicios");
        break;

    case "en":
        $("#nServicios").html("<span class='font-weight-bold text-center'>S</span>Our Services");
        break;

    case "po":
        $("#nServicios").html("<span class='font-weight-bold text-center'>S</span>Nossos serviços");
        break;

    case "fr":
        $("#nServicios").html("<span class='font-weight-bold text-center'>S</span>Nos services");
        break;

    case "it":
        $("#nServicios").html("<span class='font-weight-bold text-center'>S</span>I nostri servizi");
        break;

    case "de":
        $("#nServicios").html("<span class='font-weight-bold text-center'>D</span>Unsere Dienstleistungen");
        break;
};
switch(lang) {
    case "en":
        $("#t01").text("Ships");
        $("#l01a").text("High Speed Ferries / HSC Ferries");
        $("#l01b").text("RORO Ships");
        $("#l01c").text("Harbor Ship Assist and Tanker Escort");
        $("#l01d").text("Heavy lift barge transport");
        $("#l01e").text("Cargo and Freight Forwarder");
        $("#l01f").text("Global Ship Management");
        break;

    case "fr":
        $("#t01").text("Navires");
        $("#l01a").text("Navires rapides Ferrys HSC");
        $("#l01b").text("RORO navires");
        $("#l01c").text("Assistance aux navires dans le port et escorte dans les bateaux à huile");
        $("#l01d").text("Transport par barges lourdes");
        $("#l01e").text("Fret et transitaire");
        $("#l01f").text("Gestion globale des navires");
        break;

    case "po":
        $("#t01").text("Navios");
        $("#l01a").text("Embarcações de alta velocidade Ferrys HSC");
        $("#l01b").text("Navios RORO");
        $("#l01c").text("Assistência a navios no porto e escolta em barcos a óleo");
        $("#l01d").text("Transporte de barcaça de elevação pesada");
        $("#l01e").text("Cargo e transitório");
        $("#l01f").text("Gerenciamento Global de Navios");
        break;

    case "it":
        $("#t01").text("Navi");
        $("#l01a").text("Navi ad alta velocità Ferrys HSC");
        $("#l01b").text("RORO spedisce");
        $("#l01c").text("Assistenza alle navi in porto e scorta in barche di olio");
        $("#l01d").text("Trasporto di chiatte pesanti");
        $("#l01e").text("Cargo e spedizioniere");
        $("#l01f").text("Gestione globale della nave");
        break;

    case "de":
        $("#t01").text("Schiffe");
        $("#l01a").text("Hochgeschwindigkeitsfähren / HSC Ferries");
        $("#l01b").text("RORO Schiffe");
        $("#l01c").text("Harbor Ship Assist und Tanker Escort");
        $("#l01d").text("Schwerlastkahntransport");
        $("#l01e").text("Fracht und Spediteur");
        $("#l01f").text("Globales Schiffsmanagement");
        break;
};
switch(lang) {
    case "en":
        $("#t02").text("Fuels");
        $("#l02a").text("Fuel Sales and Distribution");
        $("#l02b").text("Liquefied Natural Gas");
        break;

    case "fr":
        $("#t02").text("Carburants");
        $("#l02a").text("Ventes et distribution de carburant");
        $("#l02b").text("Gaz naturel liquéfié");
        break;

    case "po":
        $("#t02").text("Combustíveis");
        $("#l02a").text("Vendas e Distribuição de Combustível");
        $("#l02b").text("Gás Natural Liquefeito");
        break;

    case "it":
        $("#t02").text("Combustibili");
        $("#l02a").text("Vendite e distribuzione di carburante");
        $("#l02b").text("Gas naturale liquefatto");
        break;

    case "de":
        $("#t02").text("Brennstoffe");
        $("#l02a").text("Verkauf und Vertrieb von Kraftstoff");
        $("#l02b").text("Verflüssigtes Erdgas");
        break;
};
switch(lang) {
    case "en":
        $("#t03").text("Specials");
        $("#l03a").text("Oil Transportation");
        $("#l03b").text("Transport of chemical substances");
        break;

    case "fr":
        $("#t03").text("Particuliers");
        $("#l03a").text("Transport du pétrole");
        $("#l03b").text("Transport de substances chimiques");
        break;

    case "po":
        $("#t03").text("Especiais");
        $("#l03a").text("Transporte de Petróleo");
        $("#l03b").text("Transporte de substâncias químicas");
        break;

    case "it":
        $("#t03").text("Speciale");
        $("#l03a").text("Trasporto di olio");
        $("#l03b").text("Trasporto di sostanze chimiche");
        break;

    case "de":
        $("#t03").text("Spezielle");
        $("#l03a").text("Öltransport");
        $("#l03b").text("Transport von chemischen Substanzen");
        break;
};
switch(lang) {

    case "en":
        $("#t04").text("Management");
        $("#l04a").text("Project management");
        $("#l04b").text("Shipping and logistics");
        $("#l04c").text("Cargo transport and global project logistics");
        $("#l04d").text("Offshore services");
        break;


    case "fr":
        $("#t04").text("Management");
        $("#l04a").text("Gestion de projet");
        $("#l04b").text("Expédition et logistique");
        $("#l04c").text("Transport de marchandises et logistique de projet globale");
        $("#l04d").text("Services offshore");
        break;


    case "po":
        $("#t04").text("Gestão");
        $("#l04a").text("Gestão de projetos");
        $("#l04b").text("Expedição e logística");
        $("#l04c").text("Transporte de cargas e logística global de projetos");
        $("#l04d").text("Serviços offshore");
        break;


    case "it":
        $("#t04").text("Gestione");
        $("#l04a").text("Gestión de proyectos");
        $("#l04b").text("Spedizione e logistica");
        $("#l04c").text("Trasporto merci e logistica globale dei progetti");
        $("#l04d").text("Servizi offshore");
        break;


    case "de":
        $("#t04").text("Management");
        $("#l04a").text("Projektmanagement");
        $("#l04b").text("Versand und Logistik");
        $("#l04c").text("Güterverkehr und globale Projektlogistik");
        $("#l04d").text("Offshore-Dienste");
        break;

};
switch(lang) {
    case "en":
        $("#t05").text("Rescue");
        $("#l05a").text("Marine rescue, shipwreck removal and emergency response");
        $("#l05b").text("OPA 90 compliance");
        $("#l05c").text("Marine solutions");
        $("#l05d").text("Oceanic Towing");
        break;

    case "fr":
        $("#t05").text("Récupération");
        $("#l05a").text("Sauvetage en mer, enlèvement de naufrage et intervention d'urgence");
        $("#l05b").text("Conformité OPA 90");
        $("#l05c").text("Solutions marines");
        $("#l05d").text("Remorquage océanique");
        break;

    case "po":
        $("#t05").text("Salvamento");
        $("#l05a").text("Resgate marinho, remoção de naufrágio e resposta a emergências");
        $("#l05b").text("Conformidade com o OPA 90");
        $("#l05c").text("Soluções marinhas");
        $("#l05d").text("Reboque oceânico");
        break;

    case "it":
        $("#t05").text("Salvataggio");
        $("#l05a").text("Salvataggio in mare, rimozione di naufragio e risposta di emergenza");
        $("#l05b").text("Conformità OPA 90");
        $("#l05c").text("Soluzioni marine");
        $("#l05d").text("Rimorchio per l'oceano");
        break;

    case "de":
        $("#t05").text("Rettung");
        $("#l05a").text("Marine-Rettung, Schiffswrack-Entfernung und Notfallmaßnahmen");
        $("#l05b").text("OPA 90 Konformität");
        $("#l05c").text("Marine Lösungen");
        $("#l05d").text("Ozeanisches Abschleppen");
        break;
};
switch(lang) {
    case "en":
        $("#t06").text("Engineering");
        $("#l06a").text("Naval Architecture");
        $("#l06b").text("Boat Design");
        $("#l06c").text("Ship Construction Management");
        $("#l06d").text("Engineering");
        break;

    case "fr":
        $("#t06").text("Ingénierie");
        $("#l06a").text("Architecture navale");
        $("#l06b").text("Conception de bateau");
        $("#l06c").text("Gestione della costruzione navale");
        $("#l06d").text("Ingénierie");
        break;

    case "po":
        $("#t06").text("Engenharia");
        $("#l06a").text("Arquitetura Naval");
        $("#l06b").text("Design de barco");
        $("#l06c").text("Gestão de construção naval");
        $("#l06d").text("Engenharia");
        break;

    case "it":
        $("#t06").text("Ingegneria");
        $("#l06a").text("Architettura navale");
        $("#l06b").text("Design della barca");
        $("#l06c").text("Gestione della costruzione navale");
        $("#l06d").text("Ingegneria");
        break;

    case "de":
        $("#t06").text("Ingenieurwesen");
        $("#l06a").text("Schiffsbau");
        $("#l06b").text("Boot Design");
        $("#l06c").text("Schiffbaumanagement");
        $("#l06d").text("Ingenieurwesen");
        break;
};

// SLIDER
switch(lang) {
    case "es":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Galería");
        break;
    case "en":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Gallery");
        break;
    case "fr":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Galerie");
        break;
    case "po":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Galeria");
        break;
    case "it":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Galleria");
        break;
    case "de":
        $("#gal").html("<span class='font-weight-bold text-center'>G</span>Galerie");
        break;
};

// Contact
switch(lang) {
    case "en":
        $("#sol01").text("Are you looking for solutions for your company?");
        $("#sol02").text("Our specialty is Transportation and Cargo Movements. We have highly trained personnel with 25 years of experience in logistics and maritime business in Panama, offering high quality products and services at the best prices.");
        break;

    case "fr":
        $("#sol01").text("Cherchez-vous des solutions pour votre entreprise?");
        $("#sol02").text("Notre spécialité est les mouvements de transport et de fret. Nous avons un personnel hautement qualifié avec 25 ans d'expérience dans la logistique et les affaires maritimes au Panama, offrant des produits et des services de haute qualité au meilleur prix.");
        break;

    case "po":
        $("#sol01").text("Você está procurando soluções para sua empresa?");
        $("#sol02").text("Nossa especialidade é Movimentos de Transporte e Carga. Temos pessoal altamente treinado com 25 anos de experiência em logística e negócios marítimos no Panamá, oferecendo produtos e serviços de alta qualidade com os melhores preços.");
        break;

    case "it":
        $("#sol01").text("Stai cercando soluzioni per la tua azienda?");
        $("#sol02").text("La nostra specialità sono i movimenti di trasporto e di carico. Abbiamo un personale altamente qualificato con 25 anni di esperienza nella logistica e affari marittimi a Panama, offrendo prodotti e servizi di alta qualità ai migliori prezzi.");
        break;

    case "de":
        $("#sol01").text("Sie suchen nach Lösungen für Ihr Unternehmen?");
        $("#sol02").text("Unsere Spezialität ist Transport und Frachtbewegungen. Wir haben hochqualifiziertes Personal mit 25 Jahren Erfahrung in der Logistik und maritimen Wirtschaft in Panama, das qualitativ hochwertige Produkte und Dienstleistungen zu besten Preisen anbietet.");
        break;
};
switch(lang) {
    case "en":
        $("#cntct").html("Contact Us");
        break;
    case "fr":
        $("#cntct").html("Contactez-nous");
        break;
    case "po":
        $("#cntct").html("Contate-Nos");
        break;
    case "it":
        $("#cntct").html("Contattaci");
        break;
    case "de":
        $("#cntct").html("Kontaktiere uns");
        break;
};
switch(lang) {
    case "es":
        $("#ContactUS").text("Contáctenos");
        $("#name").attr("placeholder","Nombre");
        $("#lastname").attr("placeholder","Apellido");
        $("#email").attr("placeholder","Correo");
        $("#city").attr("placeholder","Ciudad");
        $("#message").attr("placeholder","Mensaje");
        $("#send").attr("value","Enviar");
        $("#descargar").html("<em>(ó descargue nuestro formulario de solicitud de presupuesto <a href='atpa_sol_es.docx' target='_blank'>aqui</a>)</em>");
        break;

    case "fr":
        $("#ContactUS").text("Contactez-Nous");
        $("#name").attr("placeholder","Nom");
        $("#lastname").attr("placeholder","Le nom");
        $("#email").attr("placeholder","Email");
        $("#city").attr("placeholder","Ville");
        $("#message").attr("placeholder","Message");
        $("#send").attr("value","Envoyer");
        $("#descargar").html("<em>(ou téléchargez notre formulaire de demande <a href='atpa_sol_en.docx' target='_blank'>ici</a>)</em>");
        break;

    case "it":
        $("#ContactUS").text("Contattaci");
        $("#name").attr("placeholder","Nome");
        $("#lastname").attr("placeholder","Cognome");
        $("#email").attr("placeholder","Posta elettronica");
        $("#city").attr("placeholder","Città");
        $("#message").attr("placeholder","Messaggio");
        $("#send").attr("value","Inviare");
        $("#descargar").html("<em>(oppure scarica il nostro modulo di richiesta di preventivo <a href='atpa_sol_en.docx' target='_blank'>qui</a>.)</em>");
        break;

    case "po":
        $("#ContactUS").text("Contate-Nos");
        $("#name").attr("placeholder","Nome");
        $("#lastname").attr("placeholder","Apelido");
        $("#email").attr("placeholder","Correio");
        $("#city").attr("placeholder","Cidade");
        $("#message").attr("placeholder","Mensagem");
        $("#send").attr("value","Enviar");
        $("#descargar").html("<em>(ou baixe nosso formulário de solicitação <a href='atpa_sol_en.docx' target='_blank'>aqui</a>.)</em>");
        break;

    case "de":
        $("#ContactUS").text("Kontaktiere Uns");
        $("#name").attr("placeholder","Name");
        $("#lastname").attr("placeholder","Nachname");
        $("#email").attr("placeholder","E-Mail");
        $("#city").attr("placeholder","Stadt");
        $("#message").attr("placeholder","Sendschreiben");
        $("#send").attr("value","Senden");
        $("#descargar").html("<em>(oder laden Sie unser Anfrageformular <a href='atpa_sol_en.docx' target='_blank'>hier</a> herunter.)</em>");
        break;
}


// Footer
switch(lang) {
    case "en":
        $("#salida").html("Your Shipping Company<br>We develop and manage commercial shipping routes on the Pacific Coast in Feeder mode");
        break;

    case "fr":
        $("#salida").html("Votre compagnie maritime<br>Nous développons et gérons des routes commerciales maritimes sur la côte du Pacifique en mode Feeder");
        break;

    case "po":
        $("#salida").html("Sua empresa de transporte<br>Desenvolvemos e gerenciamos rotas de navegação comercial na Costa do Pacífico no modo Alimentador");
        break;

    case "it":
        $("#salida").html("La tua compagnia di spedizioni<br>Sviluppiamo e gestiamo rotte di navigazione commerciale sulla costa del Pacifico in modalità Feeder");
        break;

    case "de":
        $("#salida").html("Ihre Speditionsfirma<br>Wir entwickeln und verwalten Handelsschifffahrtswege an der Pazifikküste im Feeder-Modus");
        break;
};
switch(lang) {
    case "en":
        $("#botDir0").text("Our Address");
        $("#botDir1").html("Colón Free Zone <br>France Field<br>Panama");
        break;

    case "fr":
        $("#botDir0").text("Notre adresse");
        $("#botDir1").html("Zone Franche de Colon <br/> Zone Champ de France <br/>Panama");
        break;

    case "po":
        $("#botDir0").text("Nosso endereço");
        $("#botDir1").html("Zona livre de Colón <br>Área de campo de França<br>Panamá");
        break;

    case "it":
        $("#botDir0").text("Il nostro indirizzo");
        $("#botDir1").html("Colón Free Zone<br>Area di campo della Francia<br>Panama");
        break;

    case "de":
        $("#botDir0").text("Unsere Adresse");
        $("#botDir1").html("Colon Freizone<br>Frankreich Feld Bereich<br>Panama");
        break;

};
switch(lang) {
    case "en":
        $("#botInicio").text("Home");
        $("#botNosotros").text("About Us");
        $("#botServicios").text("Services");
        $("#botGaleria").text("Gallery");
        $("#botContactenos").text("Contact Us");
        break;
    case "fr":
        $("#botInicio").text("Accueil");
        $("#botNosotros").text("Nous");
        $("#botServicios").text("Services");
        $("#botGaleria").text("Galerie");
        $("#botContactenos").text("Contactez-nous");
        break;
    case "po":
        $("#botInicio").text("Home");
        $("#botNosotros").text("Nós");
        $("#botServicios").text("Serviços");
        $("#botGaleria").text("Galeria");
        $("#botContactenos").text("Contate-Nos");
        break;
    case "it":
        $("#botInicio").text("Home");
        $("#botNosotros").text("Noi");
        $("#botServicios").text("Servizi");
        $("#botGaleria").text("Galleria");
        $("#botContactenos").text("Contattaci");
        break;
    case "de":
        $("#botInicio").text("Startseite");
        $("#botNosotros").text("Über uns");
        $("#botServicios").text("Dienstleistungen");
        $("#botGaleria").text("Galerie");
        $("#botContactenos").text("Kontaktiere Uns");
        break;
};
switch(lang) {
    case "en":
        $("#derechos").html("©2018 Smart Logistics Cargo. All Rights Reserved.");
        break;
    case "fr":
        $("#derechos").html("©2018 Smart Logistics Cargo. Tous droits réservés.");
        break;
    case "po":
        $("#derechos").html("©2018 Smart Logistics Cargo. Todos os direitos reservados.");
        break;
    case "it":
        $("#derechos").html("©2018 Smart Logistics Cargo. Prenotazioni per los derechos.");
        break;
    case "de":
        $("#derechos").html("©2018 Smart Logistics Cargo. Alle Rechte vorbehalten.");
        break;
};


document.getElementById('countries').value = lang;

function run_site() {
    localStorage.setItem("lParam", document.getElementById('countries').value);
    window.location.replace("index.php");
}

$(document).ready(function() {
    $("#countries").msDropdown();


    // silder
    var jssor_1_SlideshowTransitions = [
        {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
    ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $SpacingX: 5,
            $SpacingY: 5
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 980;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*#endregion responsive code end*/


    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    var next_trip = new Date();
    var next_trip_format = (next_trip.getMonth()+1) + '/'+ (next_trip.getDate() + 4) + '/' + next_trip.getFullYear();
    var next_trip_back_format = (next_trip.getMonth()+1) + '/'+ (next_trip.getDate() + 6) + '/' + next_trip.getFullYear();
    console.log(next_trip_format);
    $('.input-group.date').datepicker({
        weekStart: 0,
        startDate: next_trip_format,
        maxViewMode: 0,
        clearBtn: true,
        daysOfWeekDisabled: "0,2,4,6",
        daysOfWeekHighlighted: "1,3,5",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
    });
    $('.input-group-return.date').datepicker({
        weekStart: 0,
        startDate: next_trip_back_format,
        maxViewMode: 0,
        clearBtn: true,
        daysOfWeekDisabled: "0,1,3,5,6",
        daysOfWeekHighlighted: "2,4",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
    });

    $().UItoTop({
        easingType: 'easeOutQuart'
    });

});

