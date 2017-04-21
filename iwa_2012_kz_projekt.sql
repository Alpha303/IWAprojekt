-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2014 at 08:51 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iwa_2012_kz_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE IF NOT EXISTS `clanak` (
  `clanak_id` int(11) NOT NULL AUTO_INCREMENT,
  `korisnik_id` int(10) NOT NULL,
  `naslov` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(500) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `objavljen` int(11) NOT NULL,
  PRIMARY KEY (`clanak_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`clanak_id`, `korisnik_id`, `naslov`, `tekst`, `slika`, `datum`, `objavljen`) VALUES
(1, 1, 'Uvodni post', 'The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog The Quick Brown Fox Jumps Over The Lazy Dog', ' images/slika1.png', '2013-12-20 10:52:39', 0),
(2, 2, 'Neki post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id tempus ante. Integer in fringilla erat. Sed eros lorem, faucibus non pellentesque vel, auctor vitae quam. Proin tincidunt nisi sit amet erat aliquet varius. Nullam luctus odio at elit posuere auctor quis sit amet elit. Praesent quis mauris quis elit viverra viverra. Proin sit amet ullamcorper velit. Morbi quis diam tincidunt, tincidunt justo nec, aliquet odio. Nullam feugiat hendrerit sapien accumsan porta. Integer id urna pellentesque, tincidunt metus elementum, mattis est. Maecenas iaculis quam ac ipsum commodo, et commodo odio accumsan. Aenean vitae tellus id dolor euismod dictum id ac ligula. Nulla facilisi. Nunc vulputate, quam vitae porttitor facilisis, lacus arcu interdum massa, vel pharetra lectus velit in risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nPhasellus ornare convallis sem ac convallis. Vestibulum non interdum sapien. Nunc in congue eros. Proin tellus urna, fringilla euismod porta non, luctus sed erat. Sed hendrerit mattis lorem in facilisis. In adipiscing dictum placerat. Aenean sit amet posuere tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam a tempor tellus, quis blandit lorem. Mauris at vestibulum sem. Vestibulum in nulla adipiscing, semper enim vel, dignissim sapien. Sed vitae nibh id ligula gravida vehicula.\n\nEtiam vestibulum erat ut odio fringilla consequat. Vestibulum ac nisl sed erat vestibulum auctor ac in diam.', ' images/slika2.png', '2013-12-21 10:50:35', 0),
(3, 2, 'Najbolji post', 'Ius elit vocent recteque cu, fabulas quaestio iudicabit an est, tantas molestiae adipiscing vix eu. Cu putant consequuntur mea, essent offendit instructior ex nec. Ea cum partem insolens comprehensam, veritus aliquando ad vix, ex qui volumus percipit. Has cu movet semper iriure. Eam omnesque inciderint eu, te vim aeterno interesset.\r\n\r\nId facer platonem quo, primis menandri contentiones ut usu. Saepe vocent an eos, cu sed essent sensibus reformidans. Id soluta aliquid efficiantur vel, id illum docendi has. Ne omittam mandamus delicatissimi nec.\r\n\r\nCeteros menandri inciderint cu pro, probo fugit ad per. Eam alia repudiare an, te pro meis alterum volumus. Et scripta legimus gloriatur sit. Vim lorem eleifend accommodare eu. Ubique mollis pri no, purto veniam praesent ei vim, vim in postea petentium. Et ignota deserunt iracundia has.\r\n\r\nQuo decore mollis voluptua te, ad duo propriae praesent. Alia putent argumentum pro id, ex legendos appellantur consequuntur duo, id aperiri oporteat temporibus eum. Vis in eros inermis petentium, et probo viris partem eam, mea sumo nulla te. Iusto omnesque electram ei est.\r\n\r\nAd usu quem everti theophrastus, paulo maiorum tincidunt mea id. Vim semper electram ea, ut alterum lucilius qui. Te pri homero ancillae indoctum. Sit erant indoctum in, nec option latine pericula in, ne solum appellantur pri. Illud periculis vis ea, nobis aliquam corrumpit in mei. Eum in mazim habemus, assum paulo ad eos.\r\n\r\nMei ne solum ancillae, mel viderer expetendis no. Ex verear forensibus qui, sea at odio libris quidam. Mel omnis graeci deserunt ne, stet brute elaboraret ne vix. No volumus omittam nominavi usu, id est duis everti. Vel ut ignota expetenda, sed inermis evertitur te, in pri probatus honestatis interpretaris.\r\n\r\nUt paulo recteque reprimique vim, pro id odio consul. Perfecto consectetuer his ne, et case vidit graecis sit. Suscipiantur definitiones necessitatibus has ut, modus omnesque id eam. Ne vis iudico fabellas, ad elit platonem delicata has. In per nonumes appellantur. Te docendi sensibus quo.\r\n\r\nNostrum honestatis te sit. Id eos enim fugit labore. Has mutat dicant oblique cu, at sale clita per. Nostro docendi sea ei, sit corpora ocurreret ei.\r\n\r\nNam impedit splendide moderatius id, nec cu equidem moderatius, id eum laudem efficiantur. Pro in mundi concludaturque, cu vero tempor timeam vel. Graeco quaerendum mel ea. Ut labitur eripuit senserit mei. An oporteat vivendum mea, ut vim dolore saperet facilisis.\r\n\r\nId debitis detraxit voluptatibus vis, has omnes graece ut. No sea modus repudiandae, ex mea congue delectus appetere, et amet falli nec. Duo summo tincidunt at, saepe viderer sit et. Quis blandit mnesarchum sea at, ea antiopam vituperata mea.', 'images/slika3.png', '2013-12-22 16:20:04', 2),
(4, 6, 'Veoma dobar post', 'Ad duis recusabo mea. Ubique constituam eum an, suas percipitur sed ea. Nec eu tale atqui. Nobis omnes scriptorem ex vel, possit aperiam vix eu.\r\n\r\nPri te aeterno efficiendi, nobis fuisset usu ei. Ius autem disputationi in, per et nostrum nominati pertinacia. An errem tritani his. Sed aliquid periculis accusamus ea. Facer possim graecis et mea, eros mandamus est ea, ne quis iuvaret iudicabit eum.\r\n\r\nUt fabulas minimum vim, aliquid persequeris necessitatibus ius eu, no ius affert feugait senserit. Vim debitis consequat cu, an soluta assueverit intellegebat pro, cum fugit ullamcorper et. Mea dico conclusionemque eu, natum periculis ea qui, ne sed denique petentium percipitur. Ius fuisset deterruisset eu, sea in laoreet disputationi.\r\n\r\nEx pro ocurreret instructior. Pro illum repudiare liberavisse ad, nec iudico veritus postulant cu. Eum in natum prompta definiebas. Eu cum causae diceret dissentias, has amet scripta ne. Liber erant pri ex, simul quodsi eam at, eam ei consul honestatis.\r\n\r\nVirtute lucilius cu qui, eam in partiendo erroribus appellantur, mea unum dolorum ut. Esse oporteat recusabo his ex. Has oblique signiferumque in, accusata aliquando mel te. Eam enim verterem in, et has alia cetero fuisset, omnium dolores usu id. Erat tibique perpetua ut ius, quo te alterum fabulas.\r\n\r\nAliquam prodesset in sit, ne vidisse senserit suavitate mea. Solet dicunt intellegebat ut qui, vocibus civibus his no. Adhuc dicunt et usu, vel melius cotidieque ne. Duo natum constituam eu. Ea option impedit his, magna noluisse no sed. Ut posse nemore sapientem eam, et vix noster ceteros, per no probo praesent.\r\n\r\nIudicabit pertinacia reprimique id nec, modus mucius forensibus at vel, exerci feugiat pri cu. Dicam incorrupte eos ei, quo ceteros consequat id, nam zril cotidieque in. Ut cum malis putent atomorum, eligendi eleifend at eam. Cu tation commodo est, ex quo nusquam consectetuer, an quas liber causae ius. Nam fastidii invenire inciderint cu, no mei libris melius. Eu eos veri inani ancillae.\r\n\r\nEst aeque denique invenire ea. Id maiorum suscipiantur sit. Esse ipsum graeco eu ius, te pri ubique ancillae senserit. Ut magna graeco tamquam nec. Ex voluptatum inciderint persequeris ius, ut eam populo aliquando.\r\n\r\nEu ocurreret instructior eum, te brute placerat mnesarchum pro, ridens mandamus vulputate eam ad. Ne vis fugit iisque contentiones, esse tibique oportere eu mea, ut lucilius constituam inciderint vix. Pro laudem noster option ei, usu velit putent no. Ius oporteat dignissim eu, eu facer verterem antiopam per, ex ius alia velit harum. Tantas nullam detracto qui ut, ex verear adversarium vis.\r\n\r\nEi ponderum posidonium eam, ad vix legendos inimicus. Has ex euismod invidunt corrumpit, sea inani decore ex. Sit scaevola oporteat at, has habeo tempor ponderum an. His graece tamquam ne, id ius equidem omittam imperdiet, sea summo quidam in. Sea ponderum maluisset conceptam ei, te est dolor rationibus.', 'images/slika4.png', '2013-12-23 13:30:34', 1),
(5, 2, 'Izvrstan post', 'Vis ne munere ceteros fierent, sea eripuit saperet te, denique vituperata efficiantur eu sit. Id latine laoreet inciderint nec, nam ex virtute copiosae. Cu esse ignota timeam his, solum choro regione ne quo. In duis oblique corrumpit mei.\r\n\r\nEt usu mucius meliore graecis, placerat persecuti assueverit mei cu. Sit id expetenda salutatus, an vix porro minim moderatius. Aeterno nostrud molestiae at sed, vero timeam adipisci ea eam. Essent saperet impedit has ex. Mazim zril reprehendunt an eam, vim moderatius neglegentur at. Eum bonorum vituperata ex, vim id melius constituam voluptatibus.\r\n\r\nPer falli lucilius no, eu mutat oratio nam. Vim lobortis deseruisse id, viderer labitur no est, duis dignissim ne sit. Vim nisl malorum inermis at, te eos ridens petentium, has ridens dictas nostrum eu. Purto ignota delicatissimi mel id, at pri erant euismod ancillae, nec ne cibo nullam quaerendum.\r\n\r\nIus ex mazim option. Sed modo graece omittantur ea, no mel sapientem splendide. Decore delectus est ut, nusquam ocurreret ei eam. Homero consul ei pro. Aperiam mandamus vel in. Ponderum oportere duo ea, modo diceret inermis ex duo, illum porro officiis sea eu.\r\n\r\nUbique iracundia definitionem sea eu, quis alia est ei. Mea harum prompta ea, ne exerci timeam dissentias mea, pri cu wisi idque laboramus. Verear sanctus vix ut. No nec omnium atomorum, ad cum nominavi delectus quaestio, at semper luptatum usu. Mel eu essent pertinax neglegentur, meis munere duo cu.\r\n\r\nVix tantas invenire at, sed altera consequuntur ea. Suavitate consequat maiestatis usu ne, stet urbanitas scribentur ad vix, te mei nullam vivendo. Ex eam nulla detraxit repudiare, has an epicuri mediocritatem. Per malis quidam et, pri at enim consul. Nam ex augue aeterno neglegentur, ei pro agam debet eirmod. Sed sint falli feugiat et.\r\n\r\nEst quaestio senserit gloriatur ne. Vel ad modus posse iuvaret, cu molestie sapientem per. Quis veri aliquid sed ut. Cum ludus fastidii in. Quodsi apeirian his et. In has apeirian pertinax, aliquid habemus tacimates ex quo. Cu nam quis unum debet, mea probo dicta aperiri eu, ex alia accumsan has.\r\n\r\nModo mutat semper eam ex. Eam vitae tollit scripta ut, duo id dicunt civibus lucilius. Putent ponderum te pro. Ad sea dicta maiestatis instructior. Vix tempor option expetenda at, et per vocibus suscipit suscipiantur.\r\n\r\nUtinam populo necessitatibus te vim, eos civibus recteque an, est case mundi quaeque ex. Ei est eros copiosae perpetua. Perfecto consequuntur no est, ex graeco persius convenire has. Ne animal complectitur vel, alterum deserunt corrumpit nam id. Nostro appellantur ad quo, et enim eros mea, salutandi maiestatis democritum in his.\r\n\r\nEi esse ullum vel, his an sint ullum, ex pro idque laudem prompta. Nemore maluisset eam at. Ius aperiam maluisset ad, mel unum audiam posidonium no, sit ut quem constituto. Nobis regione ea eam, tempor epicuri temporibus est eu. No summo elitr nam. Mundi malorum cu mea.', 'images/slika5.png', '2013-12-24 10:49:10', 0),
(6, 2, 'Inteligentan post', 'Has omnes suavitate democritum ei. Mel case simul et. No mei odio maluisset, cum eu legere adolescens. Ea vim debitis inermis. Has stet delectus ad. Usu eu solet atomorum conceptam, nibh homero eum ea, per moderatius scriptorem mediocritatem eu. Vix ut disputationi signiferumque.\r\n\r\nEu soluta doctus regione qui. Ius libris postea everti eu, an nullam suscipiantur vel. Eu platonem aliquando efficiantur eos. Omnes labore dicunt has eu. Nullam blandit consequuntur qui ex.\r\n\r\nNo purto summo nobis mea. Nam iudico verear vulputate ex, pro summo viderer adversarium ea. Sit in magna docendi delicatissimi, ius an vidisse antiopam voluptatum, at senserit consetetur pro. Te quo prima alienum scaevola. Ut nam quodsi officiis oportere, eu alii feugiat temporibus sed. Sit ut liber prompta alterum, ea epicurei conceptam est.\r\n\r\nIn maiorum intellegam vix, nec nominavi maiestatis dissentiet in. Eam percipit volutpat id, nec no saperet conceptam. Unum soluta epicuri ut vis, pro soleat recteque neglegentur et. Sit tota aliquip vituperatoribus ad.\r\n\r\nGraece vituperata est ea, porro homero accommodare ei vix. Decore nonumy denique nec eu, sea ludus maiestatis eloquentiam ne, at sea similique appellantur. Est eu homero copiosae inimicus, eam ei dicat reprehendunt. Incorrupte liberavisse usu at.\r\n\r\nVim persius lobortis ea. Habeo simul qualisque ne mea. Tempor detraxit recteque est ea. At graeco virtute sit, in sonet nihil nec.\r\n\r\nUsu dolorem erroribus et, usu tation qualisque ei. Pro errem accommodare in, ex laudem detracto usu, eu tincidunt instructior sea. Cu inermis consetetur disputationi ius. Aliquid mentitum est in, an tollit legendos oportere sea. Elit debet vivendo te eum.\r\n\r\nNe mandamus expetenda mei, ei alii illud mei. Vix postea possit eloquentiam ea, vim eu albucius volutpat, sint deleniti vel at. In mea soluta efficiantur, illum dolore voluptaria eum ex, ei his hinc malis. At vim euismod torquatos, mel aeterno interpretaris concludaturque ut, nulla doctus vituperata te eam.\r\n\r\nQuo ea mollis regione integre, minim regione suscipit cu cum, ut doming platonem usu. Cu sint nostro sit, id his offendit gloriatur consequuntur, eum eripuit corpora ad. Corpora salutatus contentiones eum ne. Per an nonumes liberavisse, tractatos temporibus ut mei. Impetus argumentum ex sit, eu nec postea scribentur cotidieque.\r\n\r\nIndoctum disputando te has. In mei gubergren disputationi, hendrerit mediocritatem ei est. Vix probatus platonem voluptatum et, nobis abhorreant his te, viris ornatus volumus et cum. An vel dicit scriptorem, eam et timeam consequat suscipiantur. Vel at malis nostrum, ut possim suscipiantur nam, vel no tale exerci. Inermis legendos pri ut.', 'images/slika6.png', '2013-12-25 10:49:12', 0),
(7, 2, 'Zanimljiv post', 'At mel omnis accusam albucius. Sed graeco aperiam voluptua an. Graece argumentum intellegebat vis ne. Eam malis mucius integre in, vel id ubique fabulas eleifend, id imperdiet reformidans est.\r\n\r\nMinim indoctum scriptorem sea ea, est tollit rationibus ut. Id mel iusto facete appetere, pri tantas ullamcorper disputationi id. Has at solum fabellas postulant. Has no integre nominavi tractatos, nonumy consequuntur ius ad. Per eu nibh duis mundi, eu sit esse propriae.\r\n\r\nNe ceteros lobortis ocurreret mel. Vel no quod homero. Te laoreet docendi noluisse pri. Habeo menandri at eos. Eum ex paulo prodesset argumentum, ne idque laudem putent vel. Ea alterum nonumes has, usu nisl epicuri menandri id, ut ius quod ocurreret.\r\n\r\nEverti nostrud suscipiantur eum ne, suavitate moderatius quo ex. Meliore omittam fastidii sea ne, rebum tempor theophrastus quo at. Hinc congue mei ex, nemore feugiat nec in. Theophrastus mediocritatem te nec, melius platonem urbanitas sit id. Lucilius suscipiantur et mei, in per causae iuvaret posidonium.\r\n\r\nPro nulla voluptua te, et singulis disputando disputationi vis. Has no semper ornatus sententiae, has principes reprehendunt in, ad sit novum everti inermis. Viderer quaeque vim eu, nec id tantas putant mediocrem. Nibh indoctum intellegam usu no. Id legere detraxit oportere eos.\r\n\r\nId ubique omnesque invidunt eam. Qui principes efficiantur ne. Causae dolorum denique no quo, pri duis contentiones te. Sit ea tation suavitate accommodare, ex qui detraxit eloquentiam, mel ignota aeterno id. Natum recteque ei duo, in cum affert menandri persecuti. Et cum aeque virtute, regione reprimique quaerendum vis an. Mel omnes euismod recusabo id, te partiendo imperdiet mea.\r\n\r\nId accusam delicatissimi vis. Insolens conceptam at mea, ut est diceret scaevola volutpat. Est id saperet deleniti, elit vocibus eu sea. Eam iudicabit persequeris ad, et vis utinam deserunt. Duo in tincidunt dissentiunt.\r\n\r\nMei nullam corrumpit no. Mei ne primis perfecto urbanitas, sint timeam inermis ex eam. Iusto periculis his ex. Id periculis dissentiet mea. Sea modo torquatos ne, has nobis nostrum verterem id, mei ut nemore oporteat erroribus. Eruditi iracundia efficiantur vis et. Tamquam equidem mel at.\r\n\r\nDuo saperet lobortis efficiendi ei, an vim odio soluta apeirian. Mea elaboraret definitiones ne, his no alii virtute. Mei erant homero volutpat ea, ad pro dolore efficiendi. Molestie invenire ei qui, te dolor comprehensam nec.\r\n\r\nHabemus mandamus eum no, et has impetus aliquid mediocritatem. Vix id suscipit deserunt patrioque. Te cum mundi elitr, cu ridens qualisque cum. Pri quaestio posidonium at, vis te justo minim suavitate. Hendrerit persecuti eu his, qui atqui democritum voluptatum ea.', 'images/slika7.png', '2013-12-26 10:49:14', 0),
(8, 6, 'Klasičan post', 'Ad feugiat alienum conclusionemque eam, at his sumo noluisse persecuti. At sed commodo blandit argumentum, his case graecis conclusionemque ei, velit paulo animal sea ad. Ad qui eirmod impetus philosophia. Quis invenire in mel. Usu id amet soleat iracundia.\n\nVeniam intellegat ei per, no sonet homero petentium eam. Nam regione abhorreant ei, vis at adolescens dissentiet, est quando albucius imperdiet te. An augue deserunt per, per nisl mazim latine at. Mei pertinax disputationi ea. Mei inani legendos ei. Labore facilisi elaboraret ea eos, ornatus invenire urbanitas vix et.\n\nUt minim quidam alienum est, at illud doming volutpat mea. Nam euismod placerat cotidieque ei. His omittam volutpat democritum at, no eruditi sanctus eam. Amet noluisse accusamus sit eu. Sit at utinam periculis incorrupte. Ex qui option nominavi, vitae ocurreret contentiones vix ea, pro malorum indoctum at.\n\nEi pro alterum alienum definiebas. Id mel adhuc conceptam, sale porro eu eos. Pro ocurreret dissentias et, eu choro apeirian persequeris qui. Est cu nominavi adipisci electram, tantas quaeque has ei, ad sit veri choro conclusionemque. Ei maluisset intellegam qui.\n\nEos ne ornatus iudicabit euripidis. Vis semper alienum albucius ei, sit et enim voluptua corrumpit. Eirmod delicata inimicus qui eu, purto iisque petentium pri ut. Novum legimus facilisis est ei, sea nobis partem disputando at. Te mea dico senserit, sit dicam aeterno malorum et, vim an nobis iriure.\n\nEa mel duis solet regione, percipit vituperatoribus te quo, expetenda tincidunt ut pri. Dico facete vel ex, nulla nihil choro at sit. An sed brute minim, ea vix noluisse definiebas argumentum, ius legimus constituam reprehendunt ex.', 'images/slika8.png', '2013-12-27 13:30:35', 1),
(9, 2, 'Suvremen post', 'Vis ut dignissim dissentiunt, has in epicuri splendide consequuntur. Qui habeo partiendo eu. Offendit patrioque at eos, his ea iudico constituto. Vis ei reque labore honestatis.\r\n\r\nAdipisci erroribus at sea, ad mei quem soleat deseruisse. Eos latine mediocritatem ad, eu vocibus noluisse scriptorem eos, his amet elit fugit ei. At per labores democritum, purto erroribus scribentur cu duo. Meis dissentias quo no, ad quo eruditi pericula, ipsum malorum dissentias pri eu. Error viris placerat est eu.\r\n\r\nAt periculis voluptaria his, mea ei odio detraxit. Ea per ferri principes, diam atqui ei usu, aeque consul eos ei. In vix atqui lobortis, eos discere expetendis constituam te. Assentior constituto vis id, id docendi offendit mea. Id augue nostro corpora qui, veritus detracto ex vix.\r\n\r\nSea ea suavitate assentior democritum, eu altera mollis recteque cum. Eum cu invenire quaerendum, est quaeque tibique eu, an nobis latine vidisse eum. Facer harum sed cu, id invidunt probatus reformidans vim, eam facete vulputate expetendis eu. Aliquip delenit accusamus te mel. No graeci tacimates mandamus qui, sit quod soluta percipit ei.\r\n\r\nSed ad tale omittantur, et eos quaeque intellegat, propriae definiebas nam ea. Mei idque efficiantur cu, lobortis ocurreret repudiandae et vim. Laudem possim scriptorem et quo, vim ei vituperata sadipscing, vim eu prima oblique explicari. Modus explicari percipitur eu pro, copiosae voluptaria sententiae no sed. Ut has agam wisi diceret, eu melius aliquid est.\r\n\r\nIgnota theophrastus ex duo. Mel suas omnes cu, ne cibo iracundia gloriatur usu. Et rebum quando moderatius duo. Per habeo vivendum in, an nihil quidam qui, mei dicam labore discere et. Est nisl wisi ne.\r\n\r\nQuot nibh vero no quo. Ornatus blandit ad his. Id iudicabit delicatissimi eam, mel purto novum ex, sit te eripuit habemus. Sea no quot labores.\r\n\r\nId dolorum perpetua constituto eam, at nullam propriae quo. Ea ludus rationibus constituto sed, quodsi facilisi pertinax id sit, modo iuvaret mandamus vel ad. Id sonet clita nam, per persius menandri iracundia ex. Te mei suas tempor periculis, qui ullum ancillae te. Usu cu laoreet atomorum definiebas, at labores meliore duo, enim neglegentur per ad. Has noster maiorum voluptatibus cu. Eam labore sensibus molestiae cu.\r\n\r\nImpetus inimicus ne ius, nam at saepe prompta principes. Meliore dolores laboramus pri te, audiam iisque virtute ne sit. Maiorum sadipscing nec ad. His ne veri dictas definiebas, vel tale volumus an. Vix ne lorem insolens concludaturque. An hinc mazim omittantur sit.\r\n\r\nPro in augue assueverit. Te mel habemus percipit intellegebat. Facilisi liberavisse usu ei. Pro suas gubergren at, eam dicant cotidieque an. Qui ullum timeam fabulas ex, cu facer verear phaedrum sea.', 'images/slika9.png', '2013-12-28 13:55:39', 1),
(10, 2, 'Zabavan post', 'Aliquam porttitor augue a neque tincidunt aliquam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet accumsan erat. Duis vel lacinia turpis, vitae ultrices orci. Ut bibendum commodo sem quis lobortis. Praesent et tortor pretium, luctus velit mollis, placerat turpis. Vestibulum in enim venenatis, feugiat dolor vel, vehicula nulla.\r\n\r\nMauris sagittis diam sit amet aliquet facilisis. Nulla sit amet erat dolor. Praesent pulvinar dolor nisl, interdum imperdiet sapien hendrerit a. Sed consectetur adipiscing nulla, id feugiat velit pretium a. Mauris quam quam, sollicitudin non leo a, euismod ultricies elit. Curabitur tincidunt libero sit amet sapien egestas dictum. Aliquam erat volutpat. Maecenas vel leo ac augue ultricies cursus. Aliquam elementum auctor eleifend. Mauris fermentum tempor urna, faucibus tristique eros elementum vel. Nulla facilisi. Cras mollis enim ac dictum hendrerit. Donec id iaculis risus. Nunc consectetur magna sit amet velit rhoncus, et dapibus turpis fermentum. Donec ac fermentum diam, id feugiat nunc.\r\n\r\nMaecenas facilisis iaculis lacus nec auctor. Nam leo eros, varius sed vulputate sit amet, pharetra nec erat. Sed leo dui, rhoncus vehicula vehicula nec, ullamcorper congue mauris. Integer ac vulputate sapien. Vestibulum magna nunc, lacinia a justo at, tincidunt adipiscing risus. Quisque tristique libero et bibendum consequat. Nulla ullamcorper iaculis aliquet. Maecenas porttitor est velit, at sodales est cursus in. Phasellus a suscipit velit. Aenean tristique est sollicitudin, ullamcorper risus luctus, mollis metus. Proin venenatis, leo nec varius facilisis, orci purus tincidunt magna, a vestibulum orci purus vel risus. Suspendisse hendrerit risus nec purus tincidunt eleifend. Nam non ipsum nisl. Sed tincidunt condimentum aliquet. Maecenas vulputate convallis libero, ut mollis dui tincidunt eu.\r\n\r\nDonec lacinia ultrices sapien, id porta magna pretium eu. Donec imperdiet, felis eu facilisis pretium, erat augue commodo nisi, vel vehicula lectus nulla eget ipsum. Cras rutrum, nunc quis scelerisque congue, ligula tellus sagittis nisi, vitae vehicula metus lorem nec ligula. Maecenas tempor non nunc quis aliquet. In iaculis non felis in egestas. Quisque feugiat commodo turpis, sit amet tristique augue elementum quis. Aenean molestie tempus sem ut accumsan. Proin imperdiet molestie sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque risus leo, bibendum sed lorem eu, viverra fermentum turpis. Ut eu orci mi. ', 'images/slika10.png', '2013-12-29 14:43:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tekst` text NOT NULL,
  `ocjena` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clanak_id` int(11) NOT NULL,
  `korisnik_id` int(10) NOT NULL,
  PRIMARY KEY (`komentar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `tekst`, `ocjena`, `datum`, `clanak_id`, `korisnik_id`) VALUES
(1, 'Omogućeno je komentiranje na ovaj članak.', 0, '2013-12-24 17:31:34', 10, 1),
(2, 'TEST', 0, '2013-12-24 17:31:36', 10, 2),
(3, 'Ovo je najbolji članak dosad.', 3, '2013-12-24 17:31:37', 3, 5),
(4, 'Slažem se, ovo je bilo zanimljivo.', 3, '2013-12-24 17:31:39', 3, 4),
(5, 'Da li uopće itko razumije o čemu se ovdje radi?', 3, '2014-01-01 13:11:56', 3, 5),
(6, 'ma daj veky, pa ti nemaš pojma. šta ti nije jasno?', 3, '2013-12-24 17:31:43', 3, 4),
(7, 'A tebe nisam ništa pitao ako ne znaš objasnit onda se ne javljaj', 3, '2014-01-01 13:11:54', 3, 5),
(8, 'Daljnji komentari na ovu temu su zatvoreni.', 3, '2013-12-24 17:31:47', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `korisnik_id` int(10) NOT NULL AUTO_INCREMENT,
  `tip_id` int(10) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `lozinka` varchar(32) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slika` varchar(200) NOT NULL,
  PRIMARY KEY (`korisnik_id`),
  KEY `korisnicko_ime` (`korisnicko_ime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `tip_id`, `korisnicko_ime`, `lozinka`, `ime`, `prezime`, `email`, `slika`) VALUES
(1, 0, 'admin', 'foi', 'administrator', 'N/A', 'N/A', 'images/users/admin.png'),
(2, 1, 'rkom', 'pass', 'Robert', 'Komljenović', '1234@hotmail.com', 'images/users/default.png'),
(3, 2, 'iivic', '1234', 'Ivo', 'Ivic', 'ivo.ivic@t-com.hr', 'images/users/default.png'),
(4, 2, 'mmaric', '1234', 'Marko', 'Marić', 'm.maric@t-com.hr', 'images/users/default.png'),
(5, 2, 'veky3', '1234', 'Vedran', 'Jozić', 'vz22221@hotmail.com', 'images/users/default.png'),
(6, 1, 'autor11', '1234', 'Autor11', 'N/A', 'autor11@yahoo.com', 'images/users/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `oznaka`
--

CREATE TABLE IF NOT EXISTS `oznaka` (
  `oznaka_id` int(11) NOT NULL AUTO_INCREMENT,
  `oznaka` varchar(45) NOT NULL,
  `clanak_id` int(11) NOT NULL,
  PRIMARY KEY (`oznaka_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `oznaka`
--

INSERT INTO `oznaka` (`oznaka_id`, `oznaka`, `clanak_id`) VALUES
(1, 'organizacija', 1),
(2, 'informatika', 2),
(3, 'ekonomija', 3),
(4, 'računalstvo', 4),
(5, 'programiranje', 5),
(6, 'PHP', 6),
(7, 'SQL', 7),
(8, 'HTML', 8),
(9, 'CSS', 9),
(10, 'WWW', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `tip_id` int(10) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`tip_id`, `naziv`) VALUES
(0, 'administrator'),
(1, 'autor'),
(2, 'prijavljeni_korisnik'),
(3, 'autorski_zahtjev');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
