<?php

/*
 * This file is part of the Battle.net API Client package.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pwnraid\Bnet\Test;

use Pwnraid\Bnet\Utils;

class UtilsTest extends \PHPUnit_Framework_TestCase
{
    public function testRealmNameToSlug()
    {
        $this->assertsame('aegwynn', Utils::realmNameToSlug('Aegwynn'));
        $this->assertsame('aerie-peak', Utils::realmNameToSlug('Aerie Peak'));
        $this->assertsame('agamaggan', Utils::realmNameToSlug('Agamaggan'));
        $this->assertsame('aggra-portugues', Utils::realmNameToSlug('Aggra (Português)'));
        $this->assertsame('aggramar', Utils::realmNameToSlug('Aggramar'));
        $this->assertsame('ahnqiraj', Utils::realmNameToSlug('Ahn\'Qiraj'));
        $this->assertsame('alakir', Utils::realmNameToSlug('Al\'Akir'));
        $this->assertsame('alexstrasza', Utils::realmNameToSlug('Alexstrasza'));
        $this->assertsame('alleria', Utils::realmNameToSlug('Alleria'));
        $this->assertsame('alonsus', Utils::realmNameToSlug('Alonsus'));
        $this->assertsame('amanthul', Utils::realmNameToSlug('Aman\'Thul'));
        $this->assertsame('ambossar', Utils::realmNameToSlug('Ambossar'));
        $this->assertsame('anachronos', Utils::realmNameToSlug('Anachronos'));
        $this->assertsame('anetheron', Utils::realmNameToSlug('Anetheron'));
        $this->assertsame('antonidas', Utils::realmNameToSlug('Antonidas'));
        $this->assertsame('anubarak', Utils::realmNameToSlug('Anub\'arak'));
        $this->assertsame('arakarahm', Utils::realmNameToSlug('Arak-arahm'));
        $this->assertsame('arathi', Utils::realmNameToSlug('Arathi'));
        $this->assertsame('arathor', Utils::realmNameToSlug('Arathor'));
        $this->assertsame('archimonde', Utils::realmNameToSlug('Archimonde'));
        $this->assertsame('area-52', Utils::realmNameToSlug('Area 52'));
        $this->assertsame('argent-dawn', Utils::realmNameToSlug('Argent Dawn'));
        $this->assertsame('arthas', Utils::realmNameToSlug('Arthas'));
        $this->assertsame('arygos', Utils::realmNameToSlug('Arygos'));
        $this->assertsame('ashenvale', Utils::realmNameToSlug('Ashenvale'));
        $this->assertsame('aszune', Utils::realmNameToSlug('Aszune'));
        $this->assertsame('auchindoun', Utils::realmNameToSlug('Auchindoun'));
        $this->assertsame('azjolnerub', Utils::realmNameToSlug('Azjol-Nerub'));
        $this->assertsame('azshara', Utils::realmNameToSlug('Azshara'));
        $this->assertsame('azuregos', Utils::realmNameToSlug('Azuregos'));
        $this->assertsame('azuremyst', Utils::realmNameToSlug('Azuremyst'));
        $this->assertsame('baelgun', Utils::realmNameToSlug('Baelgun'));
        $this->assertsame('balnazzar', Utils::realmNameToSlug('Balnazzar'));
        $this->assertsame('blackhand', Utils::realmNameToSlug('Blackhand'));
        $this->assertsame('blackmoore', Utils::realmNameToSlug('Blackmoore'));
        $this->assertsame('blackrock', Utils::realmNameToSlug('Blackrock'));
        $this->assertsame('blackscar', Utils::realmNameToSlug('Blackscar'));
        $this->assertsame('blades-edge', Utils::realmNameToSlug('Blade\'s Edge'));
        $this->assertsame('bladefist', Utils::realmNameToSlug('Bladefist'));
        $this->assertsame('bloodfeather', Utils::realmNameToSlug('Bloodfeather'));
        $this->assertsame('bloodhoof', Utils::realmNameToSlug('Bloodhoof'));
        $this->assertsame('bloodscalp', Utils::realmNameToSlug('Bloodscalp'));
        $this->assertsame('blutkessel', Utils::realmNameToSlug('Blutkessel'));
        $this->assertsame('booty-bay', Utils::realmNameToSlug('Booty Bay'));
        $this->assertsame('borean-tundra', Utils::realmNameToSlug('Borean Tundra'));
        $this->assertsame('boulderfist', Utils::realmNameToSlug('Boulderfist'));
        $this->assertsame('bronze-dragonflight', Utils::realmNameToSlug('Bronze Dragonflight'));
        $this->assertsame('bronzebeard', Utils::realmNameToSlug('Bronzebeard'));
        $this->assertsame('burning-blade', Utils::realmNameToSlug('Burning Blade'));
        $this->assertsame('burning-legion', Utils::realmNameToSlug('Burning Legion'));
        $this->assertsame('burning-steppes', Utils::realmNameToSlug('Burning Steppes'));
        $this->assertsame('cthun', Utils::realmNameToSlug('C\'Thun'));
        $this->assertsame('chamber-of-aspects', Utils::realmNameToSlug('Chamber of Aspects'));
        $this->assertsame('chants-eternels', Utils::realmNameToSlug('Chants éternels'));
        $this->assertsame('chogall', Utils::realmNameToSlug('Cho\'gall'));
        $this->assertsame('chromaggus', Utils::realmNameToSlug('Chromaggus'));
        $this->assertsame('colinas-pardas', Utils::realmNameToSlug('Colinas Pardas'));
        $this->assertsame('confrerie-du-thorium', Utils::realmNameToSlug('Confrérie du Thorium'));
        $this->assertsame('conseil-des-ombres', Utils::realmNameToSlug('Conseil des Ombres'));
        $this->assertsame('crushridge', Utils::realmNameToSlug('Crushridge'));
        $this->assertsame('culte-de-la-rive-noire', Utils::realmNameToSlug('Culte de la Rive noire'));
        $this->assertsame('daggerspine', Utils::realmNameToSlug('Daggerspine'));
        $this->assertsame('dalaran', Utils::realmNameToSlug('Dalaran'));
        $this->assertsame('dalvengyr', Utils::realmNameToSlug('Dalvengyr'));
        $this->assertsame('darkmoon-faire', Utils::realmNameToSlug('Darkmoon Faire'));
        $this->assertsame('darksorrow', Utils::realmNameToSlug('Darksorrow'));
        $this->assertsame('darkspear', Utils::realmNameToSlug('Darkspear'));
        $this->assertsame('das-konsortium', Utils::realmNameToSlug('Das Konsortium'));
        $this->assertsame('das-syndikat', Utils::realmNameToSlug('Das Syndikat'));
        $this->assertsame('deathguard', Utils::realmNameToSlug('Deathguard'));
        $this->assertsame('deathweaver', Utils::realmNameToSlug('Deathweaver'));
        $this->assertsame('deathwing', Utils::realmNameToSlug('Deathwing'));
        $this->assertsame('deepholm', Utils::realmNameToSlug('Deepholm'));
        $this->assertsame('defias-brotherhood', Utils::realmNameToSlug('Defias Brotherhood'));
        $this->assertsame('dentarg', Utils::realmNameToSlug('Dentarg'));
        $this->assertsame('der-mithrilorden', Utils::realmNameToSlug('Der Mithrilorden'));
        $this->assertsame('der-rat-von-dalaran', Utils::realmNameToSlug('Der Rat von Dalaran'));
        $this->assertsame('der-abyssische-rat', Utils::realmNameToSlug('Der abyssische Rat'));
        $this->assertsame('destromath', Utils::realmNameToSlug('Destromath'));
        $this->assertsame('dethecus', Utils::realmNameToSlug('Dethecus'));
        $this->assertsame('die-aldor', Utils::realmNameToSlug('Die Aldor'));
        $this->assertsame('die-arguswacht', Utils::realmNameToSlug('Die Arguswacht'));
        $this->assertsame('die-nachtwache', Utils::realmNameToSlug('Die Nachtwache'));
        $this->assertsame('die-silberne-hand', Utils::realmNameToSlug('Die Silberne Hand'));
        $this->assertsame('die-todeskrallen', Utils::realmNameToSlug('Die Todeskrallen'));
        $this->assertsame('die-ewige-wacht', Utils::realmNameToSlug('Die ewige Wacht'));
        $this->assertsame('doomhammer', Utils::realmNameToSlug('Doomhammer'));
        $this->assertsame('draenor', Utils::realmNameToSlug('Draenor'));
        $this->assertsame('dragonblight', Utils::realmNameToSlug('Dragonblight'));
        $this->assertsame('dragonmaw', Utils::realmNameToSlug('Dragonmaw'));
        $this->assertsame('drakthul', Utils::realmNameToSlug('Drak\'thul'));
        $this->assertsame('drekthar', Utils::realmNameToSlug('Drek\'Thar'));
        $this->assertsame('dun-modr', Utils::realmNameToSlug('Dun Modr'));
        $this->assertsame('dun-morogh', Utils::realmNameToSlug('Dun Morogh'));
        $this->assertsame('dunemaul', Utils::realmNameToSlug('Dunemaul'));
        $this->assertsame('durotan', Utils::realmNameToSlug('Durotan'));
        $this->assertsame('earthen-ring', Utils::realmNameToSlug('Earthen Ring'));
        $this->assertsame('echsenkessel', Utils::realmNameToSlug('Echsenkessel'));
        $this->assertsame('eitrigg', Utils::realmNameToSlug('Eitrigg'));
        $this->assertsame('eldrethalas', Utils::realmNameToSlug('Eldre\'Thalas'));
        $this->assertsame('elune', Utils::realmNameToSlug('Elune'));
        $this->assertsame('emerald-dream', Utils::realmNameToSlug('Emerald Dream'));
        $this->assertsame('emeriss', Utils::realmNameToSlug('Emeriss'));
        $this->assertsame('eonar', Utils::realmNameToSlug('Eonar'));
        $this->assertsame('eredar', Utils::realmNameToSlug('Eredar'));
        $this->assertsame('eversong', Utils::realmNameToSlug('Eversong'));
        $this->assertsame('executus', Utils::realmNameToSlug('Executus'));
        $this->assertsame('exodar', Utils::realmNameToSlug('Exodar'));
        $this->assertsame('festung-der-sturme', Utils::realmNameToSlug('Festung der Stürme'));
        $this->assertsame('fordragon', Utils::realmNameToSlug('Fordragon'));
        $this->assertsame('forscherliga', Utils::realmNameToSlug('Forscherliga'));
        $this->assertsame('frostmane', Utils::realmNameToSlug('Frostmane'));
        $this->assertsame('frostmourne', Utils::realmNameToSlug('Frostmourne'));
        $this->assertsame('frostwhisper', Utils::realmNameToSlug('Frostwhisper'));
        $this->assertsame('frostwolf', Utils::realmNameToSlug('Frostwolf'));
        $this->assertsame('galakrond', Utils::realmNameToSlug('Galakrond'));
        $this->assertsame('garona', Utils::realmNameToSlug('Garona'));
        $this->assertsame('garrosh', Utils::realmNameToSlug('Garrosh'));
        $this->assertsame('genjuros', Utils::realmNameToSlug('Genjuros'));
        $this->assertsame('ghostlands', Utils::realmNameToSlug('Ghostlands'));
        $this->assertsame('gilneas', Utils::realmNameToSlug('Gilneas'));
        $this->assertsame('goldrinn', Utils::realmNameToSlug('Goldrinn'));
        $this->assertsame('gordunni', Utils::realmNameToSlug('Gordunni'));
        $this->assertsame('gorgonnash', Utils::realmNameToSlug('Gorgonnash'));
        $this->assertsame('greymane', Utils::realmNameToSlug('Greymane'));
        $this->assertsame('grim-batol', Utils::realmNameToSlug('Grim Batol'));
        $this->assertsame('grom', Utils::realmNameToSlug('Grom'));
        $this->assertsame('guldan', Utils::realmNameToSlug('Gul\'dan'));
        $this->assertsame('hakkar', Utils::realmNameToSlug('Hakkar'));
        $this->assertsame('haomarush', Utils::realmNameToSlug('Haomarush'));
        $this->assertsame('hellfire', Utils::realmNameToSlug('Hellfire'));
        $this->assertsame('hellscream', Utils::realmNameToSlug('Hellscream'));
        $this->assertsame('howling-fjord', Utils::realmNameToSlug('Howling Fjord'));
        $this->assertsame('hyjal', Utils::realmNameToSlug('Hyjal'));
        $this->assertsame('illidan', Utils::realmNameToSlug('Illidan'));
        $this->assertsame('jaedenar', Utils::realmNameToSlug('Jaedenar'));
        $this->assertsame('kaelthas', Utils::realmNameToSlug('Kael\'thas'));
        $this->assertsame('karazhan', Utils::realmNameToSlug('Karazhan'));
        $this->assertsame('kargath', Utils::realmNameToSlug('Kargath'));
        $this->assertsame('kazzak', Utils::realmNameToSlug('Kazzak'));
        $this->assertsame('kelthuzad', Utils::realmNameToSlug('Kel\'Thuzad'));
        $this->assertsame('khadgar', Utils::realmNameToSlug('Khadgar'));
        $this->assertsame('khaz-modan', Utils::realmNameToSlug('Khaz Modan'));
        $this->assertsame('khazgoroth', Utils::realmNameToSlug('Khaz\'goroth'));
        $this->assertsame('kiljaeden', Utils::realmNameToSlug('Kil\'jaeden'));
        $this->assertsame('kilrogg', Utils::realmNameToSlug('Kilrogg'));
        $this->assertsame('kirin-tor', Utils::realmNameToSlug('Kirin Tor'));
        $this->assertsame('korgall', Utils::realmNameToSlug('Kor\'gall'));
        $this->assertsame('kragjin', Utils::realmNameToSlug('Krag\'jin'));
        $this->assertsame('krasus', Utils::realmNameToSlug('Krasus'));
        $this->assertsame('kul-tiras', Utils::realmNameToSlug('Kul Tiras'));
        $this->assertsame('kult-der-verdammten', Utils::realmNameToSlug('Kult der Verdammten'));
        $this->assertsame('la-croisade-ecarlate', Utils::realmNameToSlug('La Croisade écarlate'));
        $this->assertsame('laughing-skull', Utils::realmNameToSlug('Laughing Skull'));
        $this->assertsame('les-clairvoyants', Utils::realmNameToSlug('Les Clairvoyants'));
        $this->assertsame('les-sentinelles', Utils::realmNameToSlug('Les Sentinelles'));
        $this->assertsame('lich-king', Utils::realmNameToSlug('Lich King'));
        $this->assertsame('lightbringer', Utils::realmNameToSlug('Lightbringer'));
        $this->assertsame('lightnings-blade', Utils::realmNameToSlug('Lightning\'s Blade'));
        $this->assertsame('lordaeron', Utils::realmNameToSlug('Lordaeron'));
        $this->assertsame('los-errantes', Utils::realmNameToSlug('Los Errantes'));
        $this->assertsame('lothar', Utils::realmNameToSlug('Lothar'));
        $this->assertsame('madmortem', Utils::realmNameToSlug('Madmortem'));
        $this->assertsame('magtheridon', Utils::realmNameToSlug('Magtheridon'));
        $this->assertsame('malganis', Utils::realmNameToSlug('Mal\'Ganis'));
        $this->assertsame('malfurion', Utils::realmNameToSlug('Malfurion'));
        $this->assertsame('malorne', Utils::realmNameToSlug('Malorne'));
        $this->assertsame('malygos', Utils::realmNameToSlug('Malygos'));
        $this->assertsame('mannoroth', Utils::realmNameToSlug('Mannoroth'));
        $this->assertsame('marecage-de-zangar', Utils::realmNameToSlug('Marécage de Zangar'));
        $this->assertsame('mazrigos', Utils::realmNameToSlug('Mazrigos'));
        $this->assertsame('medivh', Utils::realmNameToSlug('Medivh'));
        $this->assertsame('minahonda', Utils::realmNameToSlug('Minahonda'));
        $this->assertsame('moonglade', Utils::realmNameToSlug('Moonglade'));
        $this->assertsame('mugthol', Utils::realmNameToSlug('Mug\'thol'));
        $this->assertsame('nagrand', Utils::realmNameToSlug('Nagrand'));
        $this->assertsame('nathrezim', Utils::realmNameToSlug('Nathrezim'));
        $this->assertsame('naxxramas', Utils::realmNameToSlug('Naxxramas'));
        $this->assertsame('nazjatar', Utils::realmNameToSlug('Nazjatar'));
        $this->assertsame('nefarian', Utils::realmNameToSlug('Nefarian'));
        $this->assertsame('nemesis', Utils::realmNameToSlug('Nemesis'));
        $this->assertsame('neptulon', Utils::realmNameToSlug('Neptulon'));
        $this->assertsame('nerzhul', Utils::realmNameToSlug('Ner\'zhul'));
        $this->assertsame('nerathor', Utils::realmNameToSlug('Nera\'thor'));
        $this->assertsame('nethersturm', Utils::realmNameToSlug('Nethersturm'));
        $this->assertsame('nordrassil', Utils::realmNameToSlug('Nordrassil'));
        $this->assertsame('norgannon', Utils::realmNameToSlug('Norgannon'));
        $this->assertsame('nozdormu', Utils::realmNameToSlug('Nozdormu'));
        $this->assertsame('onyxia', Utils::realmNameToSlug('Onyxia'));
        $this->assertsame('outland', Utils::realmNameToSlug('Outland'));
        $this->assertsame('perenolde', Utils::realmNameToSlug('Perenolde'));
        $this->assertsame('pozzo-delleternita', Utils::realmNameToSlug('Pozzo dell\'Eternità'));
        $this->assertsame('proudmoore', Utils::realmNameToSlug('Proudmoore'));
        $this->assertsame('quelthalas', Utils::realmNameToSlug('Quel\'Thalas'));
        $this->assertsame('ragnaros', Utils::realmNameToSlug('Ragnaros'));
        $this->assertsame('rajaxx', Utils::realmNameToSlug('Rajaxx'));
        $this->assertsame('rashgarroth', Utils::realmNameToSlug('Rashgarroth'));
        $this->assertsame('ravencrest', Utils::realmNameToSlug('Ravencrest'));
        $this->assertsame('ravenholdt', Utils::realmNameToSlug('Ravenholdt'));
        $this->assertsame('razuvious', Utils::realmNameToSlug('Razuvious'));
        $this->assertsame('rexxar', Utils::realmNameToSlug('Rexxar'));
        $this->assertsame('runetotem', Utils::realmNameToSlug('Runetotem'));
        $this->assertsame('sanguino', Utils::realmNameToSlug('Sanguino'));
        $this->assertsame('sargeras', Utils::realmNameToSlug('Sargeras'));
        $this->assertsame('saurfang', Utils::realmNameToSlug('Saurfang'));
        $this->assertsame('scarshield-legion', Utils::realmNameToSlug('Scarshield Legion'));
        $this->assertsame('senjin', Utils::realmNameToSlug('Sen\'jin'));
        $this->assertsame('shadowsong', Utils::realmNameToSlug('Shadowsong'));
        $this->assertsame('shattered-halls', Utils::realmNameToSlug('Shattered Halls'));
        $this->assertsame('shattered-hand', Utils::realmNameToSlug('Shattered Hand'));
        $this->assertsame('shattrath', Utils::realmNameToSlug('Shattrath'));
        $this->assertsame('shendralar', Utils::realmNameToSlug('Shen\'dralar'));
        $this->assertsame('silvermoon', Utils::realmNameToSlug('Silvermoon'));
        $this->assertsame('sinstralis', Utils::realmNameToSlug('Sinstralis'));
        $this->assertsame('skullcrusher', Utils::realmNameToSlug('Skullcrusher'));
        $this->assertsame('soulflayer', Utils::realmNameToSlug('Soulflayer'));
        $this->assertsame('spinebreaker', Utils::realmNameToSlug('Spinebreaker'));
        $this->assertsame('sporeggar', Utils::realmNameToSlug('Sporeggar'));
        $this->assertsame('steamwheedle-cartel', Utils::realmNameToSlug('Steamwheedle Cartel'));
        $this->assertsame('stormrage', Utils::realmNameToSlug('Stormrage'));
        $this->assertsame('stormreaver', Utils::realmNameToSlug('Stormreaver'));
        $this->assertsame('stormscale', Utils::realmNameToSlug('Stormscale'));
        $this->assertsame('sunstrider', Utils::realmNameToSlug('Sunstrider'));
        $this->assertsame('sylvanas', Utils::realmNameToSlug('Sylvanas'));
        $this->assertsame('taerar', Utils::realmNameToSlug('Taerar'));
        $this->assertsame('talnivarr', Utils::realmNameToSlug('Talnivarr'));
        $this->assertsame('tarren-mill', Utils::realmNameToSlug('Tarren Mill'));
        $this->assertsame('teldrassil', Utils::realmNameToSlug('Teldrassil'));
        $this->assertsame('temple-noir', Utils::realmNameToSlug('Temple noir'));
        $this->assertsame('terenas', Utils::realmNameToSlug('Terenas'));
        $this->assertsame('terokkar', Utils::realmNameToSlug('Terokkar'));
        $this->assertsame('terrordar', Utils::realmNameToSlug('Terrordar'));
        $this->assertsame('the-maelstrom', Utils::realmNameToSlug('The Maelstrom'));
        $this->assertsame('the-shatar', Utils::realmNameToSlug('The Sha\'tar'));
        $this->assertsame('the-venture-co', Utils::realmNameToSlug('The Venture Co'));
        $this->assertsame('theradras', Utils::realmNameToSlug('Theradras'));
        $this->assertsame('thermaplugg', Utils::realmNameToSlug('Thermaplugg'));
        $this->assertsame('thrall', Utils::realmNameToSlug('Thrall'));
        $this->assertsame('throkferoth', Utils::realmNameToSlug('Throk\'Feroth'));
        $this->assertsame('thunderhorn', Utils::realmNameToSlug('Thunderhorn'));
        $this->assertsame('tichondrius', Utils::realmNameToSlug('Tichondrius'));
        $this->assertsame('tirion', Utils::realmNameToSlug('Tirion'));
        $this->assertsame('todeswache', Utils::realmNameToSlug('Todeswache'));
        $this->assertsame('trollbane', Utils::realmNameToSlug('Trollbane'));
        $this->assertsame('turalyon', Utils::realmNameToSlug('Turalyon'));
        $this->assertsame('twilights-hammer', Utils::realmNameToSlug('Twilight\'s Hammer'));
        $this->assertsame('twisting-nether', Utils::realmNameToSlug('Twisting Nether'));
        $this->assertsame('tyrande', Utils::realmNameToSlug('Tyrande'));
        $this->assertsame('uldaman', Utils::realmNameToSlug('Uldaman'));
        $this->assertsame('ulduar', Utils::realmNameToSlug('Ulduar'));
        $this->assertsame('uldum', Utils::realmNameToSlug('Uldum'));
        $this->assertsame('ungoro', Utils::realmNameToSlug('Un\'Goro'));
        $this->assertsame('varimathras', Utils::realmNameToSlug('Varimathras'));
        $this->assertsame('vashj', Utils::realmNameToSlug('Vashj'));
        $this->assertsame('veklor', Utils::realmNameToSlug('Vek\'lor'));
        $this->assertsame('veknilash', Utils::realmNameToSlug('Vek\'nilash'));
        $this->assertsame('voljin', Utils::realmNameToSlug('Vol\'jin'));
        $this->assertsame('wildhammer', Utils::realmNameToSlug('Wildhammer'));
        $this->assertsame('wrathbringer', Utils::realmNameToSlug('Wrathbringer'));
        $this->assertsame('xavius', Utils::realmNameToSlug('Xavius'));
        $this->assertsame('ysera', Utils::realmNameToSlug('Ysera'));
        $this->assertsame('ysondre', Utils::realmNameToSlug('Ysondre'));
        $this->assertsame('zenedar', Utils::realmNameToSlug('Zenedar'));
        $this->assertsame('zirkel-des-cenarius', Utils::realmNameToSlug('Zirkel des Cenarius'));
        $this->assertsame('zuljin', Utils::realmNameToSlug('Zul\'jin'));
        $this->assertsame('zuluhed', Utils::realmNameToSlug('Zuluhed'));
        $this->assertsame('akama', Utils::realmNameToSlug('Akama'));
        $this->assertsame('altar-of-storms', Utils::realmNameToSlug('Altar of Storms'));
        $this->assertsame('alterac-mountains', Utils::realmNameToSlug('Alterac Mountains'));
        $this->assertsame('andorhal', Utils::realmNameToSlug('Andorhal'));
        $this->assertsame('anvilmar', Utils::realmNameToSlug('Anvilmar'));
        $this->assertsame('azgalor', Utils::realmNameToSlug('Azgalor'));
        $this->assertsame('azralon', Utils::realmNameToSlug('Azralon'));
        $this->assertsame('barthilas', Utils::realmNameToSlug('Barthilas'));
        $this->assertsame('black-dragonflight', Utils::realmNameToSlug('Black Dragonflight'));
        $this->assertsame('blackwater-raiders', Utils::realmNameToSlug('Blackwater Raiders'));
        $this->assertsame('blackwing-lair', Utils::realmNameToSlug('Blackwing Lair'));
        $this->assertsame('bleeding-hollow', Utils::realmNameToSlug('Bleeding Hollow'));
        $this->assertsame('blood-furnace', Utils::realmNameToSlug('Blood Furnace'));
        $this->assertsame('bonechewer', Utils::realmNameToSlug('Bonechewer'));
        $this->assertsame('caelestrasz', Utils::realmNameToSlug('Caelestrasz'));
        $this->assertsame('cairne', Utils::realmNameToSlug('Cairne'));
        $this->assertsame('cenarion-circle', Utils::realmNameToSlug('Cenarion Circle'));
        $this->assertsame('cenarius', Utils::realmNameToSlug('Cenarius'));
        $this->assertsame('coilfang', Utils::realmNameToSlug('Coilfang'));
        $this->assertsame('dark-iron', Utils::realmNameToSlug('Dark Iron'));
        $this->assertsame('darrowmere', Utils::realmNameToSlug('Darrowmere'));
        $this->assertsame('dathremar', Utils::realmNameToSlug('Dath\'Remar'));
        $this->assertsame('dawnbringer', Utils::realmNameToSlug('Dawnbringer'));
        $this->assertsame('demon-soul', Utils::realmNameToSlug('Demon Soul'));
        $this->assertsame('detheroc', Utils::realmNameToSlug('Detheroc'));
        $this->assertsame('draktharon', Utils::realmNameToSlug('Drak\'Tharon'));
        $this->assertsame('draka', Utils::realmNameToSlug('Draka'));
        $this->assertsame('drakkari', Utils::realmNameToSlug('Drakkari'));
        $this->assertsame('dreadmaul', Utils::realmNameToSlug('Dreadmaul'));
        $this->assertsame('drenden', Utils::realmNameToSlug('Drenden'));
        $this->assertsame('duskwood', Utils::realmNameToSlug('Duskwood'));
        $this->assertsame('echo-isles', Utils::realmNameToSlug('Echo Isles'));
        $this->assertsame('farstriders', Utils::realmNameToSlug('Farstriders'));
        $this->assertsame('feathermoon', Utils::realmNameToSlug('Feathermoon'));
        $this->assertsame('fenris', Utils::realmNameToSlug('Fenris'));
        $this->assertsame('firetree', Utils::realmNameToSlug('Firetree'));
        $this->assertsame('fizzcrank', Utils::realmNameToSlug('Fizzcrank'));
        $this->assertsame('gallywix', Utils::realmNameToSlug('Gallywix'));
        $this->assertsame('garithos', Utils::realmNameToSlug('Garithos'));
        $this->assertsame('gnomeregan', Utils::realmNameToSlug('Gnomeregan'));
        $this->assertsame('gorefiend', Utils::realmNameToSlug('Gorefiend'));
        $this->assertsame('grizzly-hills', Utils::realmNameToSlug('Grizzly Hills'));
        $this->assertsame('gundrak', Utils::realmNameToSlug('Gundrak'));
        $this->assertsame('gurubashi', Utils::realmNameToSlug('Gurubashi'));
        $this->assertsame('hydraxis', Utils::realmNameToSlug('Hydraxis'));
        $this->assertsame('icecrown', Utils::realmNameToSlug('Icecrown'));
        $this->assertsame('jubeithos', Utils::realmNameToSlug('Jubei\'Thos'));
        $this->assertsame('kalecgos', Utils::realmNameToSlug('Kalecgos'));
        $this->assertsame('korgath', Utils::realmNameToSlug('Korgath'));
        $this->assertsame('korialstrasz', Utils::realmNameToSlug('Korialstrasz'));
        $this->assertsame('lethon', Utils::realmNameToSlug('Lethon'));
        $this->assertsame('lightninghoof', Utils::realmNameToSlug('Lightninghoof'));
        $this->assertsame('llane', Utils::realmNameToSlug('Llane'));
        $this->assertsame('madoran', Utils::realmNameToSlug('Madoran'));
        $this->assertsame('maelstrom', Utils::realmNameToSlug('Maelstrom'));
        $this->assertsame('maiev', Utils::realmNameToSlug('Maiev'));
        $this->assertsame('misha', Utils::realmNameToSlug('Misha'));
        $this->assertsame('moknathal', Utils::realmNameToSlug('Mok\'Nathal'));
        $this->assertsame('moon-guard', Utils::realmNameToSlug('Moon Guard'));
        $this->assertsame('moonrunner', Utils::realmNameToSlug('Moonrunner'));
        $this->assertsame('muradin', Utils::realmNameToSlug('Muradin'));
        $this->assertsame('nazgrel', Utils::realmNameToSlug('Nazgrel'));
        $this->assertsame('nesingwary', Utils::realmNameToSlug('Nesingwary'));
        $this->assertsame('queldorei', Utils::realmNameToSlug('Quel\'dorei'));
        $this->assertsame('rivendare', Utils::realmNameToSlug('Rivendare'));
        $this->assertsame('scarlet-crusade', Utils::realmNameToSlug('Scarlet Crusade'));
        $this->assertsame('scilla', Utils::realmNameToSlug('Scilla'));
        $this->assertsame('sentinels', Utils::realmNameToSlug('Sentinels'));
        $this->assertsame('shadow-council', Utils::realmNameToSlug('Shadow Council'));
        $this->assertsame('shadowmoon', Utils::realmNameToSlug('Shadowmoon'));
        $this->assertsame('shandris', Utils::realmNameToSlug('Shandris'));
        $this->assertsame('shuhalo', Utils::realmNameToSlug('Shu\'halo'));
        $this->assertsame('silver-hand', Utils::realmNameToSlug('Silver Hand'));
        $this->assertsame('sisters-of-elune', Utils::realmNameToSlug('Sisters of Elune'));
        $this->assertsame('skywall', Utils::realmNameToSlug('Skywall'));
        $this->assertsame('smolderthorn', Utils::realmNameToSlug('Smolderthorn'));
        $this->assertsame('spirestone', Utils::realmNameToSlug('Spirestone'));
        $this->assertsame('staghelm', Utils::realmNameToSlug('Staghelm'));
        $this->assertsame('stonemaul', Utils::realmNameToSlug('Stonemaul'));
        $this->assertsame('suramar', Utils::realmNameToSlug('Suramar'));
        $this->assertsame('tanaris', Utils::realmNameToSlug('Tanaris'));
        $this->assertsame('thaurissan', Utils::realmNameToSlug('Thaurissan'));
        $this->assertsame('the-forgotten-coast', Utils::realmNameToSlug('The Forgotten Coast'));
        $this->assertsame('the-scryers', Utils::realmNameToSlug('The Scryers'));
        $this->assertsame('the-underbog', Utils::realmNameToSlug('The Underbog'));
        $this->assertsame('thorium-brotherhood', Utils::realmNameToSlug('Thorium Brotherhood'));
        $this->assertsame('thunderlord', Utils::realmNameToSlug('Thunderlord'));
        $this->assertsame('tol-barad', Utils::realmNameToSlug('Tol Barad'));
        $this->assertsame('tortheldrin', Utils::realmNameToSlug('Tortheldrin'));
        $this->assertsame('undermine', Utils::realmNameToSlug('Undermine'));
        $this->assertsame('ursin', Utils::realmNameToSlug('Ursin'));
        $this->assertsame('uther', Utils::realmNameToSlug('Uther'));
        $this->assertsame('velen', Utils::realmNameToSlug('Velen'));
        $this->assertsame('warsong', Utils::realmNameToSlug('Warsong'));
        $this->assertsame('whisperwind', Utils::realmNameToSlug('Whisperwind'));
        $this->assertsame('windrunner', Utils::realmNameToSlug('Windrunner'));
        $this->assertsame('winterhoof', Utils::realmNameToSlug('Winterhoof'));
        $this->assertsame('wyrmrest-accord', Utils::realmNameToSlug('Wyrmrest Accord'));
        $this->assertsame('zangarmarsh', Utils::realmNameToSlug('Zangarmarsh'));
        $this->assertsame('데스윙', Utils::realmNameToSlug('데스윙'));
        $this->assertsame('듀로탄', Utils::realmNameToSlug('듀로탄'));
        $this->assertsame('불타는-군단', Utils::realmNameToSlug('불타는 군단'));
        $this->assertsame('세나리우스', Utils::realmNameToSlug('세나리우스'));
        $this->assertsame('아즈샤라', Utils::realmNameToSlug('아즈샤라'));
        $this->assertsame('윈드러너', Utils::realmNameToSlug('윈드러너'));
        $this->assertsame('줄진', Utils::realmNameToSlug('줄진'));
        $this->assertsame('하이잘', Utils::realmNameToSlug('하이잘'));
        $this->assertsame('헬스크림', Utils::realmNameToSlug('헬스크림'));
        $this->assertsame('世界之樹', Utils::realmNameToSlug('世界之樹'));
        $this->assertsame('亞雷戈斯', Utils::realmNameToSlug('亞雷戈斯'));
        $this->assertsame('冰霜之刺', Utils::realmNameToSlug('冰霜之刺'));
        $this->assertsame('冰風崗哨', Utils::realmNameToSlug('冰風崗哨'));
        $this->assertsame('地獄吼', Utils::realmNameToSlug('地獄吼'));
        $this->assertsame('夜空之歌', Utils::realmNameToSlug('夜空之歌'));
        $this->assertsame('天空之牆', Utils::realmNameToSlug('天空之牆'));
        $this->assertsame('寒冰皇冠', Utils::realmNameToSlug('寒冰皇冠'));
        $this->assertsame('尖石', Utils::realmNameToSlug('尖石'));
        $this->assertsame('屠魔山谷', Utils::realmNameToSlug('屠魔山谷'));
        $this->assertsame('巨龍之喉', Utils::realmNameToSlug('巨龍之喉'));
        $this->assertsame('憤怒使者', Utils::realmNameToSlug('憤怒使者'));
        $this->assertsame('日落沼澤', Utils::realmNameToSlug('日落沼澤'));
        $this->assertsame('暗影之月', Utils::realmNameToSlug('暗影之月'));
        $this->assertsame('水晶之刺', Utils::realmNameToSlug('水晶之刺'));
        $this->assertsame('狂熱之刃', Utils::realmNameToSlug('狂熱之刃'));
        $this->assertsame('眾星之子', Utils::realmNameToSlug('眾星之子'));
        $this->assertsame('米奈希爾', Utils::realmNameToSlug('米奈希爾'));
        $this->assertsame('聖光之願', Utils::realmNameToSlug('聖光之願'));
        $this->assertsame('血之谷', Utils::realmNameToSlug('血之谷'));
        $this->assertsame('語風', Utils::realmNameToSlug('語風'));
        $this->assertsame('銀翼要塞', Utils::realmNameToSlug('銀翼要塞'));
        $this->assertsame('阿薩斯', Utils::realmNameToSlug('阿薩斯'));
        $this->assertsame('雲蛟衛', Utils::realmNameToSlug('雲蛟衛'));
        $this->assertsame('雷鱗', Utils::realmNameToSlug('雷鱗'));
    }

    public function testThumbnailToId()
    {
        $this->assertSame('207104578511', Utils::thumbnailToId('internal-record-3702/207/104578511-avatar.jpg'));
    }

    /**
     * @expectedException        RuntimeException
     * @expectedExceptionMessage Invalid thumbnail URL "invalid.jpg"
     */
    public function testThumbnailToIdWithInvalidUrl()
    {
        Utils::thumbnailToId('invalid.jpg');
    }
}
