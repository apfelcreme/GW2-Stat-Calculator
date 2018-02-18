<?php

    $professions = array(
        "Warrior" => new Profession("Warrior", 19212, array(
            4 => new TraitLine(4, "Strength", array(
                    1446 => new TraitLineTrait(1446, "Reckless Dodge"),
                    1448 => new TraitLineTrait(1448, "Building Momentum"),
                    1453 => new TraitLineTrait(1453, "Pinnacle of Strength")
                ), array(
                    1338 => new TraitLineTrait(1338, "Forceful Greatsword"),
                    1437 => new TraitLineTrait(1437, "Berserker's Power"),
                    1440 => new TraitLineTrait(1440, "Merciless Hammer"),
                    1444 => new TraitLineTrait(1444, "Peak Performance"),
                    1447 => new TraitLineTrait(1447, "Brave Stride"),
                    1449 => new TraitLineTrait(1449, "Great Fortitude", array(new TraitPercentageModifier(Attribute::Vitality, 0.1, Attribute::Power))), 
                    1451 => new TraitLineTrait(1451, "Restorative Strength"),
                    1454 => new TraitLineTrait(1454, "Might Makes Right"),
                    2000 => new TraitLineTrait(2000, "Body Blow")
                )), 
            36 => new TraitLine(36, "Arms", array(
                    1337 => new TraitLineTrait(1337, "Bloodlust"),
                    1342 => new TraitLineTrait(1342, "Furious Burst"),
                    1343 => new TraitLineTrait(1343, "Deep Strikes")
                ), array(
                    1315 => new TraitLineTrait(1315, "Unsuspecting Foe"),
                    1316 => new TraitLineTrait(1316, "Sundering Burst"),
                    1333 => new TraitLineTrait(1333, "Blademaster"),
                    1334 => new TraitLineTrait(1334, "Opportunist"),
                    1336 => new TraitLineTrait(1336, "Burst Precision"),
                    1344 => new TraitLineTrait(1344, "Signet Mastery"),
                    1346 => new TraitLineTrait(1346, "Furious"),
                    1455 => new TraitLineTrait(1455, "Wounding Precision", array(new FlatModifier(Attribute::Precision, 120), new TraitPercentageModifier(Attribute::Expertise, 0.07, Attribute::Precision))), 
                    1707 => new TraitLineTrait(1707, "Dual Wielding")
                )), 
            22 => new TraitLine(22, "Defense", array(
                    1348 => new TraitLineTrait(1348, "Adrenal Health"),
                    1350 => new TraitLineTrait(1350, "Thick Skin"),
                    1380 => new TraitLineTrait(1380, "Spiked Armor")
                ), array(
                    1367 => new TraitLineTrait(1367, "Sundering Mace"),
                    1368 => new TraitLineTrait(1368, "Defy Pain"),
                    1372 => new TraitLineTrait(1372, "Cull the Weak"),
                    1375 => new TraitLineTrait(1375, "Last Stand"),
                    1376 => new TraitLineTrait(1376, "Shield Master"),
                    1379 => new TraitLineTrait(1379, "Armored Attack", array(new TraitPercentageModifier(Attribute::Power, 0.1, Attribute::Toughness))), 
                    1488 => new TraitLineTrait(1488, "Dogged March"),
                    1649 => new TraitLineTrait(1649, "Cleansing Ire"),
                    1708 => new TraitLineTrait(1708, "Rousing Resilience")
                )), 
            11 => new TraitLine(11, "Tactics", array(
                    1480 => new TraitLineTrait(1480, "Determined Revival"),
                    1481 => new TraitLineTrait(1481, "Inspiring Presence"),
                    1485 => new TraitLineTrait(1485, "Reviver's Might")
                ), array(
                    1469 => new TraitLineTrait(1469, "Leg Specialist"),
                    1470 => new TraitLineTrait(1470, "Vigorous Shouts"),
                    1471 => new TraitLineTrait(1471, "Empowered"),
                    1474 => new TraitLineTrait(1474, "Quick Breathing"),
                    1479 => new TraitLineTrait(1479, "Burning Arrows"),
                    1482 => new TraitLineTrait(1482, "Empower Allies", array(new FlatModifier(Attribute::Power, 150))), 
                    1486 => new TraitLineTrait(1486, "Shrug It Off"),
                    1667 => new TraitLineTrait(1667, "Powerful Synergy"),
                    1711 => new TraitLineTrait(1711, "Phalanx Strength")
                )), 
            51 => new TraitLine(51, "Discipline", array(
                    1415 => new TraitLineTrait(1415, "Versatile Rage"),
                    1416 => new TraitLineTrait(1416, "Fast Hands"),
                    1417 => new TraitLineTrait(1417, "Versatile Power")
                ), array(
                    1317 => new TraitLineTrait(1317, "Heightened Focus"),
                    1329 => new TraitLineTrait(1329, "Crack Shot"),
                    1369 => new TraitLineTrait(1369, "Axe Mastery", array(new FlatModifier(Attribute::Ferocity, 300, array(new ModifierConstraint(Weapon::Axe))))), 
                    1381 => new TraitLineTrait(1381, "Vengeful Return"),
                    1413 => new TraitLineTrait(1413, "Warrior's Sprint"),
                    1484 => new TraitLineTrait(1484, "Inspiring Battle Standard"),
                    1489 => new TraitLineTrait(1489, "Destruction of the Empowered"),
                    1657 => new TraitLineTrait(1657, "Burst Mastery"),
                    1709 => new TraitLineTrait(1709, "Brawler's Recovery")
                )), 
            18 => new TraitLine(18, "Berserker", array(
                    1831 => new TraitLineTrait(1831, "Primal Rage"),
                    1993 => new TraitLineTrait(1993, "Always Angry"),
                    2046 => new TraitLineTrait(2046, "Fatal Frenzy")
                ), array(
                    1928 => new TraitLineTrait(1928, "Bloody Roar"),
                    1977 => new TraitLineTrait(1977, "Savage Instinct"),
                    2002 => new TraitLineTrait(2002, "Dead or Alive"),
                    2011 => new TraitLineTrait(2011, "Blood Reaction", array(new TraitPercentageModifier(Attribute::Ferocity, 0.07, Attribute::Precision))), 
                    2038 => new TraitLineTrait(2038, "King of Fires"),
                    2039 => new TraitLineTrait(2039, "Last Blaze"),
                    2042 => new TraitLineTrait(2042, "Heat the Soul", array(new FlatModifier(Attribute::Condition_Damage, 150, array(new ModifierConstraint(Weapon::Torch))))), 
                    2043 => new TraitLineTrait(2043, "Eternal Champion"),
                    2049 => new TraitLineTrait(2049, "Smash Brawler")
                )), 
            61 => new TraitLine(61, "Spellbreaker", array(
                    2130 => new TraitLineTrait(2130, "Attacker's Insight"),
                    2162 => new TraitLineTrait(2162, "Dispelling Force"),
                    2175 => new TraitLineTrait(2175, "Spellbreaker's Conviction")
                ), array(
                    2060 => new TraitLineTrait(2060, "Magebane Tether"),
                    2095 => new TraitLineTrait(2095, "Sun and Moon Style"),
                    2097 => new TraitLineTrait(2097, "Slow Counter"),
                    2107 => new TraitLineTrait(2107, "Pure Strike", array(new FlatModifier(Attribute::Critical_Damage, 7))), 
                    2126 => new TraitLineTrait(2126, "Loss Aversion"),
                    2140 => new TraitLineTrait(2140, "No Escape"),
                    2153 => new TraitLineTrait(2153, "Guard Counter"),
                    2163 => new TraitLineTrait(2163, "Enchantment Collapse"),
                    2168 => new TraitLineTrait(2168, "Revenge Counter")
                ))
        )), 
        "Guardian" => new Profession("Guardian", 11645, array(
            42 => new TraitLine(42, "Zeal", array(
                    646 => new TraitLineTrait(646, "Symbolic Exposure"),
                    648 => new TraitLineTrait(648, "Zealot's Speed"),
                    649 => new TraitLineTrait(649, "Symbolic Power")
                ), array(
                    563 => new TraitLineTrait(563, "Wrathful Spirit"),
                    628 => new TraitLineTrait(628, "Binding Jeopardy"),
                    634 => new TraitLineTrait(634, "Fiery Wrath"),
                    635 => new TraitLineTrait(635, "Eternal Armory"),
                    637 => new TraitLineTrait(637, "Shattered Aegis"),
                    653 => new TraitLineTrait(653, "Zealous Blade"),
                    1556 => new TraitLineTrait(1556, "Kindled Zeal", array(new TraitPercentageModifier(Attribute::Condition_Damage, 0.1, Attribute::Power))), 
                    1925 => new TraitLineTrait(1925, "Zealous Scepter"),
                    2017 => new TraitLineTrait(2017, "Symbolic Avenger")
                )), 
            16 => new TraitLine(16, "Radiance", array(
                    568 => new TraitLineTrait(568, "Radiant Power"),
                    571 => new TraitLineTrait(571, "Renewed Justice"),
                    572 => new TraitLineTrait(572, "Justice is Blind")
                ), array(
                    565 => new TraitLineTrait(565, "Retribution"),
                    566 => new TraitLineTrait(566, "Right-Hand Strength", array(new FlatModifier(Attribute::Critical_Chance, 15, array(new ModifierConstraint(Weapon::Axe), new ModifierConstraint(Weapon::Sword), new ModifierConstraint(Weapon::Scepter), new ModifierConstraint(Weapon::Mace))))), 
                    567 => new TraitLineTrait(567, "Radiant Fire"),
                    574 => new TraitLineTrait(574, "Healer's Retribution"),
                    577 => new TraitLineTrait(577, "Inner Fire"),
                    578 => new TraitLineTrait(578, "Wrath of Justice"),
                    579 => new TraitLineTrait(579, "Perfect Inscriptions"),
                    1683 => new TraitLineTrait(1683, "Righteous Instincts"),
                    1686 => new TraitLineTrait(1686, "Amplified Wrath")
                )), 
            13 => new TraitLine(13, "Valor", array(
                    582 => new TraitLineTrait(582, "Valorous Defense"),
                    583 => new TraitLineTrait(583, "Might of the Protector"),
                    594 => new TraitLineTrait(594, "Courageous Return")
                ), array(
                    580 => new TraitLineTrait(580, "Stalwart Defender", array(new FlatModifier(Attribute::Toughness, 240, array(new ModifierConstraint(Weapon::Shield))))),
                    581 => new TraitLineTrait(581, "Smiter's Boon"),
                    584 => new TraitLineTrait(584, "Strength in Numbers", array(new FlatModifier(Attribute::Toughness, 150))), 
                    585 => new TraitLineTrait(585, "Altruistic Healing"),
                    586 => new TraitLineTrait(586, "Monk's Focus"),
                    588 => new TraitLineTrait(588, "Strength of the Fallen"),
                    589 => new TraitLineTrait(589, "Retributive Armor", array(new TraitPercentageModifier(Attribute::Ferocity, 0.13, Attribute::Toughness))), 
                    633 => new TraitLineTrait(633, "Focus Mastery"),
                    1684 => new TraitLineTrait(1684, "Communal Defenses")
                )), 
            49 => new TraitLine(49, "Honor", array(
                    551 => new TraitLineTrait(551, "Selfless Daring"),
                    564 => new TraitLineTrait(564, "Vigorous Precision"),
                    1685 => new TraitLineTrait(1685, "Purity of Body")
                ), array(
                    549 => new TraitLineTrait(549, "Pure of Heart"),
                    553 => new TraitLineTrait(553, "Pure of Voice"),
                    557 => new TraitLineTrait(557, "Honorable Staff", array(new FlatModifier(Attribute::Concentration, 200))), 
                    558 => new TraitLineTrait(558, "Writ of Persistence"),
                    559 => new TraitLineTrait(559, "Protective Reviver"),
                    562 => new TraitLineTrait(562, "Empowering Might"),
                    654 => new TraitLineTrait(654, "Protector's Impact"),
                    1682 => new TraitLineTrait(1682, "Force of Will", array(new FlatModifier(Attribute::Vitality, 300))), 
                    1899 => new TraitLineTrait(1899, "Invigorated Bulwark")
                )), 
            46 => new TraitLine(46, "Virtues", array(
                    604 => new TraitLineTrait(604, "Virtue of Retribution"),
                    620 => new TraitLineTrait(620, "Power of the Virtuous"),
                    621 => new TraitLineTrait(621, "Inspired Virtue")
                ), array(
                    554 => new TraitLineTrait(554, "Battle Presence"),
                    587 => new TraitLineTrait(587, "Glacial Heart"),
                    603 => new TraitLineTrait(603, "Virtuous Solace"),
                    610 => new TraitLineTrait(610, "Absolute Resolution"),
                    612 => new TraitLineTrait(612, "Indomitable Courage"),
                    617 => new TraitLineTrait(617, "Master of Consecrations"),
                    622 => new TraitLineTrait(622, "Permeating Wrath"),
                    624 => new TraitLineTrait(624, "Unscathed Contender"),
                    625 => new TraitLineTrait(625, "Retaliatory Subconscious")
                )), 
            27 => new TraitLine(27, "Dragonhunter", array(
                    1848 => new TraitLineTrait(1848, "Virtuous Action"),
                    1896 => new TraitLineTrait(1896, "Defender's Dogma"),
                    1926 => new TraitLineTrait(1926, "Pure of Sight")
                ), array(
                    1835 => new TraitLineTrait(1835, "Zealot's Aggression"),
                    1898 => new TraitLineTrait(1898, "Piercing Light"),
                    1908 => new TraitLineTrait(1908, "Hunter's Fortification"),
                    1911 => new TraitLineTrait(1911, "Soaring Devastation"),
                    1943 => new TraitLineTrait(1943, "Bulwark"),
                    1955 => new TraitLineTrait(1955, "Big Game Hunter"),
                    1963 => new TraitLineTrait(1963, "Heavy Light"),
                    1983 => new TraitLineTrait(1983, "Dulled Senses"),
                    2037 => new TraitLineTrait(2037, "Hunter's Determination")
                )), 
            62 => new TraitLine(62, "Firebrand", array(
                    2062 => new TraitLineTrait(2062, "Swift Scholar"),
                    2089 => new TraitLineTrait(2089, "Purity of Word"),
                    2148 => new TraitLineTrait(2148, "Imbued Haste")
                ), array(
                    2063 => new TraitLineTrait(2063, "Weighty Terms"),
                    2075 => new TraitLineTrait(2075, "Unrelenting Criticism"),
                    2076 => new TraitLineTrait(2076, "Stalwart Speed"),
                    2086 => new TraitLineTrait(2086, "Archivist of Whispers"),
                    2101 => new TraitLineTrait(2101, "Liberator's Vow"),
                    2105 => new TraitLineTrait(2105, "Stoic Demeanor"),
                    2116 => new TraitLineTrait(2116, "Legendary Lore"),
                    2159 => new TraitLineTrait(2159, "Loremaster"),
                    2179 => new TraitLineTrait(2179, "Quickfire")
                ))
        )), 
        "Revenant" => new Profession("Revenant", 15922, array(
            14 => new TraitLine(14, "Corruption", array(
                    1744 => new TraitLineTrait(1744, "Yearning Empowerment"),
                    1799 => new TraitLineTrait(1799, "Rampant Vex"),
                    1801 => new TraitLineTrait(1801, "Opportune Extraction")
                ), array(
                    1714 => new TraitLineTrait(1714, "Spontaneous Destruction"),
                    1720 => new TraitLineTrait(1720, "Maniacal Persistence"),
                    1721 => new TraitLineTrait(1721, "Pulsating Pestilence"),
                    1726 => new TraitLineTrait(1726, "Abyssal Chill"),
                    1727 => new TraitLineTrait(1727, "Bolstered Anguish"),
                    1741 => new TraitLineTrait(1741, "Venom Enhancement"),
                    1789 => new TraitLineTrait(1789, "Demonic Defiance"),
                    1793 => new TraitLineTrait(1793, "Replenishing Despair"),
                    1795 => new TraitLineTrait(1795, "Diabolic Inferno")
                )), 
            9 => new TraitLine(9, "Retribution", array(
                    1713 => new TraitLineTrait(1713, "Determined Resolution"),
                    1757 => new TraitLineTrait(1757, "Unwavering Avoidance"),
                    1783 => new TraitLineTrait(1783, "Enduring Recovery")
                ), array(
                    1728 => new TraitLineTrait(1728, "Close Quarters"),
                    1740 => new TraitLineTrait(1740, "Dwarven Battle Training"),
                    1766 => new TraitLineTrait(1766, "Eye for an Eye"),
                    1770 => new TraitLineTrait(1770, "Versed in Stone"),
                    1779 => new TraitLineTrait(1779, "Vicious Reprisal"),
                    1782 => new TraitLineTrait(1782, "Retaliatory Evasion"),
                    1790 => new TraitLineTrait(1790, "Steadfast Rejuvenation"),
                    1810 => new TraitLineTrait(1810, "Improved Aggression"),
                    1811 => new TraitLineTrait(1811, "Planar Protection")
                )), 
            12 => new TraitLine(12, "Salvation", array(
                    1814 => new TraitLineTrait(1814, "Serene Rejuvenation"),
                    1816 => new TraitLineTrait(1816, "Disarming Riposte"),
                    1821 => new TraitLineTrait(1821, "Hardened Foundation", array(new FlatModifier(Attribute::Toughness, 120), new TraitPercentageModifier(Attribute::Healing_Power, 0.07, Attribute::Toughness)))
                ), array(
                    1815 => new TraitLineTrait(1815, "Selfless Amplification"),
                    1817 => new TraitLineTrait(1817, "Eluding Nullification"),
                    1818 => new TraitLineTrait(1818, "Invoking Harmony"),
                    1819 => new TraitLineTrait(1819, "Tranquil Benediction"),
                    1820 => new TraitLineTrait(1820, "Momentary Pacification"),
                    1822 => new TraitLineTrait(1822, "Tranquil Balance"),
                    1823 => new TraitLineTrait(1823, "Nourishing Roots"),
                    1824 => new TraitLineTrait(1824, "Blinding Truths"),
                    1825 => new TraitLineTrait(1825, "Natural Abundance")
                )), 
            3 => new TraitLine(3, "Invocation", array(
                    1758 => new TraitLineTrait(1758, "Ferocious Aggression"),
                    1769 => new TraitLineTrait(1769, "Empty Vessel"),
                    1778 => new TraitLineTrait(1778, "Invoker's Rage")
                ), array(
                    1719 => new TraitLineTrait(1719, "Roiling Mists"),
                    1732 => new TraitLineTrait(1732, "Cleansing Channel"),
                    1749 => new TraitLineTrait(1749, "Song of the Mists"),
                    1760 => new TraitLineTrait(1760, "Rapid Flow"),
                    1761 => new TraitLineTrait(1761, "Forceful Persistence"),
                    1774 => new TraitLineTrait(1774, "Spirit Boon"),
                    1781 => new TraitLineTrait(1781, "Incensed Response"),
                    1784 => new TraitLineTrait(1784, "Fierce Infusion"),
                    1791 => new TraitLineTrait(1791, "Charged Mists")
                )), 
            15 => new TraitLine(15, "Devastation", array(
                    1724 => new TraitLineTrait(1724, "Targeted Destruction"),
                    1792 => new TraitLineTrait(1792, "Focused Siphoning"),
                    1808 => new TraitLineTrait(1808, "Expose Defenses")
                ), array(
                    1715 => new TraitLineTrait(1715, "Swift Termination"),
                    1754 => new TraitLineTrait(1754, "Assassin's Annihilation"),
                    1755 => new TraitLineTrait(1755, "Jade Echo"),
                    1765 => new TraitLineTrait(1765, "Nefarious Momentum"),
                    1767 => new TraitLineTrait(1767, "Vicious Lacerations"),
                    1776 => new TraitLineTrait(1776, "Ferocious Strikes", array(new FlatModifier(Attribute::Ferocity, 150))), 
                    1786 => new TraitLineTrait(1786, "Malicious Reprisal"),
                    1800 => new TraitLineTrait(1800, "Dismantle Fortifications"),
                    1802 => new TraitLineTrait(1802, "Assassin's Presence", array(new FlatModifier(Attribute::Ferocity, 225)))
                )), 
            52 => new TraitLine(52, "Herald", array(
                    1737 => new TraitLineTrait(1737, "Vigorous Persistence"),
                    1777 => new TraitLineTrait(1777, "Crystal Harbinger"),
                    1788 => new TraitLineTrait(1788, "Envoy of Sustenance", array(new FlatModifier(Attribute::Concentration, 240)))
                ), array(
                    1716 => new TraitLineTrait(1716, "Hardening Persistence"),
                    1730 => new TraitLineTrait(1730, "Harmonize Continuity"),
                    1738 => new TraitLineTrait(1738, "Bolster Fortifications"),
                    1743 => new TraitLineTrait(1743, "Shared Empowerment"),
                    1746 => new TraitLineTrait(1746, "Elder's Force"),
                    1772 => new TraitLineTrait(1772, "Soothing Bastion"),
                    1803 => new TraitLineTrait(1803, "Enhanced Bulwark"),
                    1806 => new TraitLineTrait(1806, "Radiant Revival"),
                    1813 => new TraitLineTrait(1813, "Swift Gale")
                )), 
            63 => new TraitLine(63, "Renegade", array(
                    2142 => new TraitLineTrait(2142, "Brutal Momentum"),
                    2154 => new TraitLineTrait(2154, "Endless Enmity"),
                    2181 => new TraitLineTrait(2181, "Ambush Commander")
                ), array(
                    2079 => new TraitLineTrait(2079, "Blood Fury"),
                    2092 => new TraitLineTrait(2092, "Heartpiercer"),
                    2094 => new TraitLineTrait(2094, "Vindication"),
                    2100 => new TraitLineTrait(2100, "Lasting Legacy"),
                    2108 => new TraitLineTrait(2108, "All for One"),
                    2120 => new TraitLineTrait(2120, "Wrought-Iron Will"),
                    2133 => new TraitLineTrait(2133, "Sudden Reversal"),
                    2166 => new TraitLineTrait(2166, "Ashen Demeanor"),
                    2182 => new TraitLineTrait(2182, "Righteous Rebel")
                ))
        )), 
        "Thief" => new Profession("Thief", 11645, array(
            28 => new TraitLine(28, "Deadly Arts", array(
                    1257 => new TraitLineTrait(1257, "Exposed Weakness"),
                    1279 => new TraitLineTrait(1279, "Serpent's Touch"),
                    1280 => new TraitLineTrait(1280, "Lotus Poison")
                ), array(
                    1164 => new TraitLineTrait(1164, "Trapper's Respite"),
                    1167 => new TraitLineTrait(1167, "Improvisation"),
                    1169 => new TraitLineTrait(1169, "Deadly Trapper"),
                    1245 => new TraitLineTrait(1245, "Dagger Training"),
                    1269 => new TraitLineTrait(1269, "Executioner"),
                    1276 => new TraitLineTrait(1276, "Mug"),
                    1291 => new TraitLineTrait(1291, "Potent Poison"),
                    1292 => new TraitLineTrait(1292, "Panic Strike"),
                    1704 => new TraitLineTrait(1704, "Revealed Training", array(new FlatModifier(Attribute::Power, 200)))
                )), 
            35 => new TraitLine(35, "Critical Strikes", array(
                    1210 => new TraitLineTrait(1210, "Unrelenting Strikes"),
                    1281 => new TraitLineTrait(1281, "Keen Observer"),
                    1282 => new TraitLineTrait(1282, "Ferocious Strikes")
                ), array(
                    1170 => new TraitLineTrait(1170, "Sundering Shade"),
                    1209 => new TraitLineTrait(1209, "Assassin's Fury"),
                    1215 => new TraitLineTrait(1215, "Hidden Killer"),
                    1267 => new TraitLineTrait(1267, "Signets of Power"),
                    1268 => new TraitLineTrait(1268, "Twin Fangs", array(new FlatModifier(Attribute::Critical_Chance, 7), new FlatModifier(Attribute::Critical_Damage, 7))), 
                    1272 => new TraitLineTrait(1272, "Practiced Tolerance", array(new TraitPercentageModifier(Attribute::Ferocity, 0.1, Attribute::Precision))), 
                    1299 => new TraitLineTrait(1299, "Ankle Shots"),
                    1702 => new TraitLineTrait(1702, "Invigorating Precision"),
                    1904 => new TraitLineTrait(1904, "No Quarter")
                )), 
            20 => new TraitLine(20, "Shadow Arts", array(
                    1136 => new TraitLineTrait(1136, "Meld with Shadows"),
                    1294 => new TraitLineTrait(1294, "Merciful Ambush"),
                    1705 => new TraitLineTrait(1705, "Resilience of Shadows")
                ), array(
                    1130 => new TraitLineTrait(1130, "Hidden Thief"),
                    1134 => new TraitLineTrait(1134, "Cloaked in Shadow"),
                    1135 => new TraitLineTrait(1135, "Shadow's Rejuvenation"),
                    1160 => new TraitLineTrait(1160, "Last Refuge"),
                    1162 => new TraitLineTrait(1162, "Rending Shade"),
                    1284 => new TraitLineTrait(1284, "Shadow's Embrace"),
                    1293 => new TraitLineTrait(1293, "Concealed Defeat"),
                    1297 => new TraitLineTrait(1297, "Shadow Protector"),
                    1300 => new TraitLineTrait(1300, "Leeching Venoms")
                )), 
            54 => new TraitLine(54, "Acrobatics", array(
                    1234 => new TraitLineTrait(1234, "Feline Grace"),
                    1240 => new TraitLineTrait(1240, "Expeditious Dodger"),
                    1242 => new TraitLineTrait(1242, "Endless Stamina", array(new FlatModifier(Attribute::Concentration, 240)))
                ), array(
                    1112 => new TraitLineTrait(1112, "Instant Reflexes"),
                    1192 => new TraitLineTrait(1192, "Swindler's Equilibrium"),
                    1237 => new TraitLineTrait(1237, "Pain Response"),
                    1238 => new TraitLineTrait(1238, "Assassin's Reward"),
                    1241 => new TraitLineTrait(1241, "Guarded Initiation"),
                    1289 => new TraitLineTrait(1289, "Vigorous Recovery"),
                    1290 => new TraitLineTrait(1290, "Hard to Catch"),
                    1295 => new TraitLineTrait(1295, "Upper Hand"),
                    1703 => new TraitLineTrait(1703, "Don't Stop")
                )), 
            44 => new TraitLine(44, "Trickery", array(
                    1137 => new TraitLineTrait(1137, "Kleptomaniac"),
                    1157 => new TraitLineTrait(1157, "Lead Attacks"),
                    1232 => new TraitLineTrait(1232, "Preparedness")
                ), array(
                    1158 => new TraitLineTrait(1158, "Sleight of Hand"),
                    1159 => new TraitLineTrait(1159, "Uncatchable"),
                    1163 => new TraitLineTrait(1163, "Thrill of the Crime"),
                    1187 => new TraitLineTrait(1187, "Quick Pockets"),
                    1190 => new TraitLineTrait(1190, "Pressure Striking"),
                    1252 => new TraitLineTrait(1252, "Burst of Agility"),
                    1277 => new TraitLineTrait(1277, "Bountiful Theft"),
                    1286 => new TraitLineTrait(1286, "Trickster"),
                    1706 => new TraitLineTrait(1706, "Bewildering Ambush")
                )), 
            7 => new TraitLine(7, "Daredevil", array(
                    1837 => new TraitLineTrait(1837, "Endurance Thief"),
                    1887 => new TraitLineTrait(1887, "Driven Fortitude"),
                    1994 => new TraitLineTrait(1994, "Physical Supremacy")
                ), array(
                    1833 => new TraitLineTrait(1833, "Lotus Training"),
                    1884 => new TraitLineTrait(1884, "Staff Master"),
                    1893 => new TraitLineTrait(1893, "Escapist's Absolution"),
                    1933 => new TraitLineTrait(1933, "Havoc Mastery"),
                    1949 => new TraitLineTrait(1949, "Brawler's Tenacity"),
                    1964 => new TraitLineTrait(1964, "Unhindered Combatant"),
                    1975 => new TraitLineTrait(1975, "Impacting Disruption"),
                    2023 => new TraitLineTrait(2023, "Weakening Strikes"),
                    2047 => new TraitLineTrait(2047, "Bounding Dodger")
                )), 
            58 => new TraitLine(58, "Deadeye", array(
                    2084 => new TraitLineTrait(2084, "Perfectionist"),
                    2171 => new TraitLineTrait(2171, "Deadeye's Gaze"),
                    2172 => new TraitLineTrait(2172, "Renewing Gaze")
                ), array(
                    2078 => new TraitLineTrait(2078, "Unforgiving"),
                    2093 => new TraitLineTrait(2093, "Be Quick or Be Killed", array(new FlatModifier(Attribute::Power, 200), new FlatModifier(Attribute::Precision, 200))), 
                    2111 => new TraitLineTrait(2111, "Maleficent Seven"),
                    2118 => new TraitLineTrait(2118, "Silent Scope"),
                    2136 => new TraitLineTrait(2136, "One in the Chamber"),
                    2145 => new TraitLineTrait(2145, "Revealed Malice"),
                    2146 => new TraitLineTrait(2146, "Fire for Effect"),
                    2160 => new TraitLineTrait(2160, "Peripheral Vision"),
                    2173 => new TraitLineTrait(2173, "Iron Sight")
                ))
        )), 
        "Engineer" => new Profession("Engineer", 15922, array(
            6 => new TraitLine(6, "Explosives", array(
                    429 => new TraitLineTrait(429, "Shaped Charge"),
                    432 => new TraitLineTrait(432, "Evasive Powder Keg"),
                    517 => new TraitLineTrait(517, "Steel-Packed Powder")
                ), array(
                    482 => new TraitLineTrait(482, "Aim-Assisted Rocket"),
                    505 => new TraitLineTrait(505, "Shrapnel"),
                    514 => new TraitLineTrait(514, "Grenadier"),
                    525 => new TraitLineTrait(525, "Blasting Zone", array(new FlatModifier(Attribute::Power, 120))), 
                    1541 => new TraitLineTrait(1541, "Orbital Command"),
                    1882 => new TraitLineTrait(1882, "Glass Cannon"),
                    1892 => new TraitLineTrait(1892, "Big Boomer", array(new TraitPercentageModifier(Attribute::Vitality, 0.05, Attribute::Power), new TraitPercentageModifier(Attribute::Ferocity, 0.05, Attribute::Power))), 
                    1944 => new TraitLineTrait(1944, "Short Fuse"),
                    1947 => new TraitLineTrait(1947, "Minesweeper")
                )), 
            38 => new TraitLine(38, "Firearms", array(
                    515 => new TraitLineTrait(515, "Sharpshooter"),
                    516 => new TraitLineTrait(516, "Serrated Steel"),
                    536 => new TraitLineTrait(536, "Hematic Focus")
                ), array(
                    433 => new TraitLineTrait(433, "Incendiary Powder"),
                    510 => new TraitLineTrait(510, "Juggernaut"),
                    526 => new TraitLineTrait(526, "Modified Ammunition"),
                    1878 => new TraitLineTrait(1878, "Chemical Rounds"),
                    1914 => new TraitLineTrait(1914, "High Caliber"),
                    1923 => new TraitLineTrait(1923, "No Scope"),
                    1930 => new TraitLineTrait(1930, "Sanguine Array"),
                    1984 => new TraitLineTrait(1984, "Pinpoint Distribution"),
                    2006 => new TraitLineTrait(2006, "Skilled Marksman")
                )), 
            47 => new TraitLine(47, "Inventions", array(
                    508 => new TraitLineTrait(508, "Reconstruction Enclosure"),
                    518 => new TraitLineTrait(518, "Cleansing Synergy"),
                    519 => new TraitLineTrait(519, "Energy Amplifier")
                ), array(
                    394 => new TraitLineTrait(394, "Over Shield"),
                    445 => new TraitLineTrait(445, "Mecha Legs"),
                    472 => new TraitLineTrait(472, "Anticorrosion Plating"),
                    507 => new TraitLineTrait(507, "Autodefense Bomb Dispenser"),
                    1678 => new TraitLineTrait(1678, "Experimental Turrets"),
                    1680 => new TraitLineTrait(1680, "Bunker Down"),
                    1834 => new TraitLineTrait(1834, "Soothing Detonation"),
                    1901 => new TraitLineTrait(1901, "Automated Medical Response"),
                    1916 => new TraitLineTrait(1916, "Medical Dispersion Field")
                )), 
            29 => new TraitLine(29, "Alchemy", array(
                    413 => new TraitLineTrait(413, "Compounding Chemicals", array(new FlatModifier(Attribute::Concentration, 240))), 
                    468 => new TraitLineTrait(468, "Hidden Flask"),
                    487 => new TraitLineTrait(487, "Transmute")
                ), array(
                    396 => new TraitLineTrait(396, "Invigorating Speed"),
                    469 => new TraitLineTrait(469, "Self-Regulating Defenses"),
                    470 => new TraitLineTrait(470, "Backpack Regenerator"),
                    473 => new TraitLineTrait(473, "HGH"),
                    509 => new TraitLineTrait(509, "Protection Injection"),
                    520 => new TraitLineTrait(520, "Comeback Cure"),
                    521 => new TraitLineTrait(521, "Health Insurance"),
                    1854 => new TraitLineTrait(1854, "Iron Blooded"),
                    1871 => new TraitLineTrait(1871, "Purity of Purpose")
                )), 
            21 => new TraitLine(21, "Tools", array(
                    1872 => new TraitLineTrait(1872, "Mechanized Deployment"),
                    1936 => new TraitLineTrait(1936, "Excessive Energy"),
                    1979 => new TraitLineTrait(1979, "Optimized Activation")
                ), array(
                    512 => new TraitLineTrait(512, "Streamlined Kits"),
                    523 => new TraitLineTrait(523, "Adrenal Implant"),
                    531 => new TraitLineTrait(531, "Power Wrench"),
                    532 => new TraitLineTrait(532, "Static Discharge"),
                    1679 => new TraitLineTrait(1679, "Gadgeteer"),
                    1832 => new TraitLineTrait(1832, "Takedown Round"),
                    1856 => new TraitLineTrait(1856, "Kinetic Battery"),
                    1946 => new TraitLineTrait(1946, "Lock On"),
                    1997 => new TraitLineTrait(1997, "Reactive Lenses")
                )), 
            43 => new TraitLine(43, "Scrapper", array(
                    1877 => new TraitLineTrait(1877, "Impact Savant"),
                    1959 => new TraitLineTrait(1959, "Function Gyro"),
                    2014 => new TraitLineTrait(2014, "Decisive Renown")
                ), array(
                    1849 => new TraitLineTrait(1849, "Applied Force"),
                    1860 => new TraitLineTrait(1860, "Mass Momentum", array(new TraitPercentageModifier(Attribute::Power, 0.1, Attribute::Toughness))), 
                    1867 => new TraitLineTrait(1867, "Recovery Matrix"),
                    1917 => new TraitLineTrait(1917, "Shocking Speed"),
                    1954 => new TraitLineTrait(1954, "Rapid Regeneration"),
                    1971 => new TraitLineTrait(1971, "Perfectly Weighted"),
                    1981 => new TraitLineTrait(1981, "Adaptive Armor"),
                    1999 => new TraitLineTrait(1999, "Expert Examination"),
                    2052 => new TraitLineTrait(2052, "Final Salvo")
                )), 
            57 => new TraitLine(57, "Holosmith", array(
                    2122 => new TraitLineTrait(2122, "Laser's Edge"),
                    2135 => new TraitLineTrait(2135, "Heat Therapy"),
                    2158 => new TraitLineTrait(2158, "Photon Projector")
                ), array(
                    2064 => new TraitLineTrait(2064, "Photonic Blasting Module"),
                    2066 => new TraitLineTrait(2066, "Thermal Release Valve"),
                    2091 => new TraitLineTrait(2091, "Crystal Configuration: Zephyr"),
                    2103 => new TraitLineTrait(2103, "Crystal Configuration: Storm"),
                    2106 => new TraitLineTrait(2106, "Solar Focusing Lens"),
                    2114 => new TraitLineTrait(2114, "Light Density Amplifier"),
                    2137 => new TraitLineTrait(2137, "Enhanced Capacity Storage Unit"),
                    2152 => new TraitLineTrait(2152, "Crystal Configuration: Eclipse"),
                    2157 => new TraitLineTrait(2157, "Prismatic Converter")
                ))
        )), 
        "Ranger" => new Profession("Ranger", 15922, array(
            8 => new TraitLine(8, "Marksmanship", array(
                    1009 => new TraitLineTrait(1009, "Alpha Focus"),
                    1010 => new TraitLineTrait(1010, "Opening Strike"),
                    1011 => new TraitLineTrait(1011, "Precise Strike")
                ), array(
                    986 => new TraitLineTrait(986, "Clarion Bond"),
                    996 => new TraitLineTrait(996, "Predator's Onslaught"),
                    1000 => new TraitLineTrait(1000, "Farsighted"),
                    1001 => new TraitLineTrait(1001, "Brutish Seals"),
                    1014 => new TraitLineTrait(1014, "Hunter's Gaze"),
                    1015 => new TraitLineTrait(1015, "Remorseless"),
                    1021 => new TraitLineTrait(1021, "Stoneform"),
                    1070 => new TraitLineTrait(1070, "Moment of Clarity"),
                    1698 => new TraitLineTrait(1698, "Lead the Wind")
                )), 
            30 => new TraitLine(30, "Skirmishing", array(
                    1068 => new TraitLineTrait(1068, "Hunter's Tactics"),
                    1080 => new TraitLineTrait(1080, "Tail Wind"),
                    1083 => new TraitLineTrait(1083, "Furious Grip")
                ), array(
                    1016 => new TraitLineTrait(1016, "Spotter", array(new FlatModifier(Attribute::Precision, 150))),
                    1064 => new TraitLineTrait(1064, "Quick Draw"),
                    1067 => new TraitLineTrait(1067, "Primal Reflexes"),
                    1069 => new TraitLineTrait(1069, "Sharpened Edges"),
                    1075 => new TraitLineTrait(1075, "Trapper's Expertise"),
                    1700 => new TraitLineTrait(1700, "Strider's Defense"),
                    1846 => new TraitLineTrait(1846, "Hidden Barbs"),
                    1888 => new TraitLineTrait(1888, "Vicious Quarry"),
                    1912 => new TraitLineTrait(1912, "Light on your Feet")
                )), 
            33 => new TraitLine(33, "Wilderness Survival", array(
                    1089 => new TraitLineTrait(1089, "Rugged Growth"),
                    1090 => new TraitLineTrait(1090, "Companion's Defense"),
                    1096 => new TraitLineTrait(1096, "Natural Vigor")
                ), array(
                    1086 => new TraitLineTrait(1086, "Oakheart Salve"),
                    1094 => new TraitLineTrait(1094, "Empathic Bond"),
                    1098 => new TraitLineTrait(1098, "Soften the Fall"),
                    1099 => new TraitLineTrait(1099, "Taste for Danger", array(new FlatModifier(Attribute::Vitality, 120), new TraitPercentageModifier(Attribute::Expertise, 0.07, Attribute::Vitality))), 
                    1100 => new TraitLineTrait(1100, "Shared Anguish"),
                    1101 => new TraitLineTrait(1101, "Ambidexterity", array(new FlatModifier(Attribute::Condition_Damage, 150, array(new ModifierConstraint(Weapon::Torch), new ModifierConstraint(Weapon::Dagger))))), 
                    1699 => new TraitLineTrait(1699, "Wilderness Knowledge"),
                    1701 => new TraitLineTrait(1701, "Poison Master"),
                    2032 => new TraitLineTrait(2032, "Refined Toxins")
                )), 
            25 => new TraitLine(25, "Nature Magic", array(
                    1055 => new TraitLineTrait(1055, "Rejuvenation"),
                    1056 => new TraitLineTrait(1056, "Fortifying Bond"),
                    1059 => new TraitLineTrait(1059, "Lingering Magic", array(new FlatModifier(Attribute::Concentration, 240)))
                ), array(
                    964 => new TraitLineTrait(964, "Windborne Notes"),
                    965 => new TraitLineTrait(965, "Spirited Arrival"),
                    978 => new TraitLineTrait(978, "Instinctive Reaction", array(new TraitPercentageModifier(Attribute::Healing_Power, 0.07, Attribute::Power))), 
                    1038 => new TraitLineTrait(1038, "Nature's Vengeance"),
                    1054 => new TraitLineTrait(1054, "Evasive Purity"),
                    1060 => new TraitLineTrait(1060, "Allies' Aid"),
                    1062 => new TraitLineTrait(1062, "Bountiful Hunter"),
                    1697 => new TraitLineTrait(1697, "Invigorating Bond"),
                    1988 => new TraitLineTrait(1988, "Protective Ward")
                )), 
            32 => new TraitLine(32, "Beastmastery", array(
                    974 => new TraitLineTrait(974, "Loud Whistle"),
                    1065 => new TraitLineTrait(1065, "Pet's Prowess"),
                    1900 => new TraitLineTrait(1900, "Pack Alpha")
                ), array(
                    968 => new TraitLineTrait(968, "Zephyr's Speed"),
                    970 => new TraitLineTrait(970, "Natural Healing"),
                    975 => new TraitLineTrait(975, "Wilting Strike"),
                    1047 => new TraitLineTrait(1047, "Two-Handed Training"),
                    1066 => new TraitLineTrait(1066, "Honed Axes", array(new FlatModifier(Attribute::Ferocity, 250, array(new ModifierConstraint(Weapon::Axe))))), 
                    1072 => new TraitLineTrait(1072, "Potent Ally"),
                    1606 => new TraitLineTrait(1606, "Resounding Timbre"),
                    1861 => new TraitLineTrait(1861, "Go for the Eyes"),
                    1945 => new TraitLineTrait(1945, "Beastly Warden")
                )), 
            5 => new TraitLine(5, "Druid", array(
                    1862 => new TraitLineTrait(1862, "Live Vicariously"),
                    1874 => new TraitLineTrait(1874, "Celestial Being"),
                    1992 => new TraitLineTrait(1992, "Natural Mender")
                ), array(
                    1868 => new TraitLineTrait(1868, "Druidic Clarity"),
                    1935 => new TraitLineTrait(1935, "Primal Echoes"),
                    2001 => new TraitLineTrait(2001, "Verdant Etching"),
                    2016 => new TraitLineTrait(2016, "Cultivated Synergy"),
                    2053 => new TraitLineTrait(2053, "Celestial Shadow"),
                    2055 => new TraitLineTrait(2055, "Ancient Seeds"),
                    2056 => new TraitLineTrait(2056, "Natural Stride"),
                    2057 => new TraitLineTrait(2057, "Grace of the Land"),
                    2058 => new TraitLineTrait(2058, "Lingering Light")
                )), 
            55 => new TraitLine(55, "Soulbeast", array(
                    2127 => new TraitLineTrait(2127, "Twice as Vicious"),
                    2151 => new TraitLineTrait(2151, "Elevated Bond"),
                    2156 => new TraitLineTrait(2156, "Furious Strength")
                ), array(
                    2071 => new TraitLineTrait(2071, "Live Fast"),
                    2072 => new TraitLineTrait(2072, "Unstoppable Union"),
                    2085 => new TraitLineTrait(2085, "Essence of Speed"),
                    2119 => new TraitLineTrait(2119, "Second Skin"),
                    2128 => new TraitLineTrait(2128, "Leader of the Pack"),
                    2134 => new TraitLineTrait(2134, "Fresh Reinforcement"),
                    2143 => new TraitLineTrait(2143, "Oppressive Superiority"),
                    2155 => new TraitLineTrait(2155, "Eternal Bond"),
                    2161 => new TraitLineTrait(2161, "Predator's Cunning")
                ))
        )), 
        "Mesmer" => new Profession("Mesmer", 15922, array(
            10 => new TraitLine(10, "Domination", array(
                    685 => new TraitLineTrait(685, "Illusion of Vulnerability"),
                    694 => new TraitLineTrait(694, "Dazzling"),
                    1941 => new TraitLineTrait(1941, "Fragility")
                ), array(
                    680 => new TraitLineTrait(680, "Mental Anguish"),
                    681 => new TraitLineTrait(681, "Imagined Burden"),
                    682 => new TraitLineTrait(682, "Empowered Illusions"),
                    686 => new TraitLineTrait(686, "Confounding Suggestions"),
                    687 => new TraitLineTrait(687, "Rending Shatter"),
                    693 => new TraitLineTrait(693, "Shattered Concentration"),
                    712 => new TraitLineTrait(712, "Furious Interruption"),
                    713 => new TraitLineTrait(713, "Blurred Inscriptions"),
                    1688 => new TraitLineTrait(1688, "Power Block")
                )), 
            1 => new TraitLine(1, "Dueling", array(
                    706 => new TraitLineTrait(706, "Critical Infusion"),
                    707 => new TraitLineTrait(707, "Master Fencer"),
                    710 => new TraitLineTrait(710, "Sharper Images")
                ), array(
                    692 => new TraitLineTrait(692, "Superiority Complex"),
                    700 => new TraitLineTrait(700, "Duelist's Discipline"),
                    701 => new TraitLineTrait(701, "Phantasmal Fury"),
                    704 => new TraitLineTrait(704, "Deceptive Evasion"),
                    705 => new TraitLineTrait(705, "Desperate Decoy"),
                    708 => new TraitLineTrait(708, "Fencer's Finesse"),
                    1889 => new TraitLineTrait(1889, "Blinding Dissipation"),
                    1950 => new TraitLineTrait(1950, "Ineptitude"),
                    1960 => new TraitLineTrait(1960, "Evasive Mirror")
                )), 
            45 => new TraitLine(45, "Chaos", array(
                    666 => new TraitLineTrait(666, "Metaphysical Rejuvenation"),
                    667 => new TraitLineTrait(667, "Illusionary Membrane"),
                    1865 => new TraitLineTrait(1865, "Chaotic Persistence")
                ), array(
                    668 => new TraitLineTrait(668, "Chaotic Transference", array(new TraitPercentageModifier(Attribute::Condition_Damage, 0.1, Attribute::Toughness))),
                    669 => new TraitLineTrait(669, "Chaotic Dampening"),
                    670 => new TraitLineTrait(670, "Descent into Madness"),
                    671 => new TraitLineTrait(671, "Chaotic Interruption"),
                    673 => new TraitLineTrait(673, "Mirror of Anguish"),
                    674 => new TraitLineTrait(674, "Prismatic Understanding"),
                    675 => new TraitLineTrait(675, "Illusionary Defense"),
                    677 => new TraitLineTrait(677, "Master of Manipulation"),
                    1687 => new TraitLineTrait(1687, "Bountiful Disillusionment")
                )), 
            23 => new TraitLine(23, "Inspiration", array(
                    757 => new TraitLineTrait(757, "Mender's Purity"),
                    1852 => new TraitLineTrait(1852, "Inspiring Distortion"),
                    1915 => new TraitLineTrait(1915, "Healing Prism", new TraitPercentageModifier(Attribute::Healing_Power, 0.13, Attribute::Power))
                ), array(
                    738 => new TraitLineTrait(738, "Restorative Mantras"),
                    740 => new TraitLineTrait(740, "Restorative Illusions"),
                    744 => new TraitLineTrait(744, "Sympathetic Visage"),
                    751 => new TraitLineTrait(751, "Warden's Feedback"),
                    752 => new TraitLineTrait(752, "Temporal Enchanter"),
                    756 => new TraitLineTrait(756, "Medic's Feedback"),
                    1866 => new TraitLineTrait(1866, "Illusionary Inspiration"),
                    1980 => new TraitLineTrait(1980, "Protected Phantasms"),
                    2005 => new TraitLineTrait(2005, "Mental Defense")
                )), 
            24 => new TraitLine(24, "Illusions", array(
                    723 => new TraitLineTrait(723, "Compounding Power"),
                    731 => new TraitLineTrait(731, "Master of Misdirection"),
                    734 => new TraitLineTrait(734, "Cry of Pain")
                ), array(
                    691 => new TraitLineTrait(691, "The Pledge"),
                    721 => new TraitLineTrait(721, "Shatter Storm"),
                    722 => new TraitLineTrait(722, "Escape Artist"),
                    729 => new TraitLineTrait(729, "Phantasmal Haste"),
                    733 => new TraitLineTrait(733, "Phantasmal Force"),
                    753 => new TraitLineTrait(753, "Malicious Sorcery"),
                    1690 => new TraitLineTrait(1690, "Maim the Disillusioned"),
                    1869 => new TraitLineTrait(1869, "Persistence of Memory"),
                    2035 => new TraitLineTrait(2035, "Master of Fragmentation")
                )), 
            40 => new TraitLine(40, "Chronomancer", array(
                    1859 => new TraitLineTrait(1859, "Time Marches On"),
                    1927 => new TraitLineTrait(1927, "Flow of Time"),
                    2030 => new TraitLineTrait(2030, "Time Splitter")
                ), array(
                    1838 => new TraitLineTrait(1838, "Delayed Reactions"),
                    1890 => new TraitLineTrait(1890, "Chronophantasma"),
                    1913 => new TraitLineTrait(1913, "Illusionary Reversion"),
                    1942 => new TraitLineTrait(1942, "Lost Time"),
                    1978 => new TraitLineTrait(1978, "Improved Alacrity"),
                    1987 => new TraitLineTrait(1987, "All's Well That Ends Well"),
                    1995 => new TraitLineTrait(1995, "Time Catches Up"),
                    2009 => new TraitLineTrait(2009, "Danger Time"),
                    2022 => new TraitLineTrait(2022, "Seize the Moment")
                )), 
            59 => new TraitLine(59, "Mirage", array(
                    2069 => new TraitLineTrait(2069, "Nomad's Endurance"),
                    2117 => new TraitLineTrait(2117, "Speed of Sand"),
                    2150 => new TraitLineTrait(2150, "Mirage Cloak")
                ), array(
                    2070 => new TraitLineTrait(2070, "Infinite Horizon"),
                    2082 => new TraitLineTrait(2082, "Renewing Oasis"),
                    2098 => new TraitLineTrait(2098, "Mirrored Axes"),
                    2110 => new TraitLineTrait(2110, "Riddle of Sand"),
                    2113 => new TraitLineTrait(2113, "Elusive Mind"),
                    2141 => new TraitLineTrait(2141, "Self-Deception"),
                    2169 => new TraitLineTrait(2169, "Dune Cloak"),
                    2174 => new TraitLineTrait(2174, "Mirage Mantle"),
                    2178 => new TraitLineTrait(2178, "Desert Distortion")
                ))
        )), 
        "Elementalist" => new Profession("Elementalist", 11645, array(
            31 => new TraitLine(31, "Fire", array(
                    318 => new TraitLineTrait(318, "Sunspot"),
                    319 => new TraitLineTrait(319, "Burning Rage"),
                    320 => new TraitLineTrait(320, "Empowering Flame", array(new FlatModifier(Attribute::Power, 150, array(new ModifierConstraint(Attunement::Fire)))))
                ), array(
                    294 => new TraitLineTrait(294, "Pyromancer's Puissance"),
                    296 => new TraitLineTrait(296, "Burning Precision"),
                    325 => new TraitLineTrait(325, "Pyromancer's Training"),
                    328 => new TraitLineTrait(328, "Conjurer"),
                    334 => new TraitLineTrait(334, "Power Overwhelming", array(new TraitPercentageModifier(Attribute::Condition_Damage, 0.1, Attribute::Power), new TraitPercentageModifier(Attribute::Condition_Damage, 0.1, Attribute::Toughness))),
                    335 => new TraitLineTrait(335, "Burning Fire"),
                    340 => new TraitLineTrait(340, "One with Fire"),
                    1510 => new TraitLineTrait(1510, "Persisting Flames"),
                    1675 => new TraitLineTrait(1675, "Blinding Ashes")
                )), 
            41 => new TraitLine(41, "Air", array(
                    221 => new TraitLineTrait(221, "Zephyr's Speed"),
                    222 => new TraitLineTrait(222, "Electric Discharge"),
                    223 => new TraitLineTrait(223, "Raging Storm")
                ), array(
                    214 => new TraitLineTrait(214, "Aeromancer's Training", array(new FlatModifier(Attribute::Precision, 190, array(new ModifierConstraint(Attunement::Air))))), 
                    224 => new TraitLineTrait(224, "One with Air"),
                    226 => new TraitLineTrait(226, "Bolt to the Heart"),
                    227 => new TraitLineTrait(227, "Zephyr's Boon"),
                    229 => new TraitLineTrait(229, "Inscription"),
                    232 => new TraitLineTrait(232, "Ferocious Winds", array(new TraitPercentageModifier(Attribute::Ferocity, 0.07, Attribute::Precision))),
                    1502 => new TraitLineTrait(1502, "Tempest Defense"),
                    1503 => new TraitLineTrait(1503, "Fresh Air"),
                    1672 => new TraitLineTrait(1672, "Lightning Rod")
                )), 
            26 => new TraitLine(26, "Earth", array(
                    278 => new TraitLineTrait(278, "Stone Flesh", array(new FlatModifier(Attribute::Toughness, 150, array(new ModifierConstraint(Attunement::Earth))))), 
                    279 => new TraitLineTrait(279, "Earthen Blast"),
                    280 => new TraitLineTrait(280, "Geomancer's Defense")
                ), array(
                    275 => new TraitLineTrait(275, "Strength of Stone"),
                    277 => new TraitLineTrait(277, "Geomancer's Training"),
                    281 => new TraitLineTrait(281, "Rock Solid"),
                    282 => new TraitLineTrait(282, "Earth's Embrace"),
                    287 => new TraitLineTrait(287, "Written in Stone"),
                    289 => new TraitLineTrait(289, "Elemental Shielding"),
                    1507 => new TraitLineTrait(1507, "Serrated Stones"),
                    1508 => new TraitLineTrait(1508, "Diamond Skin"),
                    1674 => new TraitLineTrait(1674, "Stone Heart")
                )), 
            17 => new TraitLine(17, "Water", array(
                    350 => new TraitLineTrait(350, "Soothing Mist"),
                    351 => new TraitLineTrait(351, "Healing Ripple"),
                    1676 => new TraitLineTrait(1676, "Aquatic Benevolence")
                ), array(
                    348 => new TraitLineTrait(348, "Soothing Ice"),
                    349 => new TraitLineTrait(349, "Aquamancer's Training"),
                    358 => new TraitLineTrait(358, "Cleansing Wave"),
                    360 => new TraitLineTrait(360, "Stop, Drop, and Roll"),
                    361 => new TraitLineTrait(361, "Powerful Aura"),
                    362 => new TraitLineTrait(362, "Cleansing Water"),
                    363 => new TraitLineTrait(363, "Piercing Shards"),
                    364 => new TraitLineTrait(364, "Soothing Disruption"),
                    2028 => new TraitLineTrait(2028, "Soothing Power")
                )), 
            37 => new TraitLine(37, "Arcane", array(
                    264 => new TraitLineTrait(264, "Elemental Attunement"),
                    268 => new TraitLineTrait(268, "Arcane Prowess"),
                    2004 => new TraitLineTrait(2004, "Elemental Enchantment", array(new FlatModifier(Attribute::Concentration, 180)))
                ), array(
                    238 => new TraitLineTrait(238, "Evasive Arcana"),
                    253 => new TraitLineTrait(253, "Arcane Precision"),
                    257 => new TraitLineTrait(257, "Final Shielding"),
                    263 => new TraitLineTrait(263, "Elemental Surge"),
                    265 => new TraitLineTrait(265, "Arcane Resurrection"),
                    266 => new TraitLineTrait(266, "Renewing Stamina"),
                    1487 => new TraitLineTrait(1487, "Arcane Abatement"),
                    1511 => new TraitLineTrait(1511, "Bountiful Power"),
                    1673 => new TraitLineTrait(1673, "Elemental Contingency")
                )), 
            48 => new TraitLine(48, "Tempest", array(
                    1938 => new TraitLineTrait(1938, "Speedy Conduit"),
                    1948 => new TraitLineTrait(1948, "Hardy Conduit"),
                    2025 => new TraitLineTrait(2025, "Singularity")
                ), array(
                    1839 => new TraitLineTrait(1839, "Imbued Melodies", array(new FlatModifier(Attribute::Concentration, 300, array(new ModifierConstraint(Weapon::Warhorn))))),
                    1886 => new TraitLineTrait(1886, "Unstable Conduit"),
                    1891 => new TraitLineTrait(1891, "Tempestuous Aria"),
                    1902 => new TraitLineTrait(1902, "Invigorating Torrents"),
                    1952 => new TraitLineTrait(1952, "Gale Song"),
                    1962 => new TraitLineTrait(1962, "Latent Stamina"),
                    1986 => new TraitLineTrait(1986, "Elemental Bastion"),
                    2015 => new TraitLineTrait(2015, "Harmonious Conduit"),
                    2033 => new TraitLineTrait(2033, "Lucid Singularity")
                )), 
            56 => new TraitLine(56, "Weaver", array(
                    2077 => new TraitLineTrait(2077, "Elemental Refreshment"),
                    2081 => new TraitLineTrait(2081, "Elemental Polyphony", array(new FlatModifier(Attribute::Power, 120, array(new ModifierConstraint(Attunement::Fire))), new FlatModifier(Attribute::Healing_Power, 120, array(new ModifierConstraint(Attunement::Water))), new FlatModifier(Attribute::Precision, 120, array(new ModifierConstraint(Attunement::Air))), new FlatModifier(Attribute::Toughness, 120, array(new ModifierConstraint(Attunement::Earth))))), 
                    2109 => new TraitLineTrait(2109, "Weaver")
                ), array(
                    2061 => new TraitLineTrait(2061, "Swift Revenge"),
                    2090 => new TraitLineTrait(2090, "Woven Stride"),
                    2115 => new TraitLineTrait(2115, "Master's Fortitude", array(new FlatModifier(Attribute::Vitality, 120, array(new ModifierConstraint(Weapon::Sword))), new TraitPercentageModifier(Attribute::Vitality, 0.05, Attribute::Power), new TraitPercentageModifier(Attribute::Vitality, 0.05, Attribute::Condition_Damage))),
                    2131 => new TraitLineTrait(2131, "Elements of Rage", array(new TraitPercentageModifier(Attribute::Ferocity, 0.14, Attribute::Power))),
                    2138 => new TraitLineTrait(2138, "Invigorating Strikes"),
                    2165 => new TraitLineTrait(2165, "Elemental Pursuit"),
                    2170 => new TraitLineTrait(2170, "Bolstered Elements"),
                    2177 => new TraitLineTrait(2177, "Superior Elements"),
                    2180 => new TraitLineTrait(2180, "Weaver's Prowess")
                ))
        )), 
        "Necromancer" => new Profession("Necromancer", 19212, array(
            53 => new TraitLine(53, "Spite", array(
                    913 => new TraitLineTrait(913, "Reaper's Might"),
                    915 => new TraitLineTrait(915, "Death's Embrace"),
                    917 => new TraitLineTrait(917, "Siphoned Power")
                ), array(
                    829 => new TraitLineTrait(829, "Awaken the Pain"),
                    853 => new TraitLineTrait(853, "Close to Death"),
                    899 => new TraitLineTrait(899, "Chill of Death"),
                    903 => new TraitLineTrait(903, "Spiteful Spirit"),
                    909 => new TraitLineTrait(909, "Dread"),
                    914 => new TraitLineTrait(914, "Spiteful Talisman"),
                    916 => new TraitLineTrait(916, "Spiteful Renewal"),
                    919 => new TraitLineTrait(919, "Signets of Suffering"),
                    1863 => new TraitLineTrait(1863, "Bitter Chill")
                )), 
            39 => new TraitLine(39, "Curses", array(
                    802 => new TraitLineTrait(802, "Barbed Precision"),
                    803 => new TraitLineTrait(803, "Furious Demise"),
                    810 => new TraitLineTrait(810, "Target the Weak", array(new TraitPercentageModifier(Attribute::Condition_Damage, 0.13, Attribute::Precision)))
                ), array(
                    801 => new TraitLineTrait(801, "Lingering Curse", array(new FlatModifier(Attribute::Condition_Damage, 150, array(new ModifierConstraint(Weapon::Scepter))))),
                    812 => new TraitLineTrait(812, "Terror"),
                    813 => new TraitLineTrait(813, "Weakening Shroud"),
                    815 => new TraitLineTrait(815, "Chilling Darkness"),
                    816 => new TraitLineTrait(816, "Master of Corruption"),
                    1693 => new TraitLineTrait(1693, "Path of Corruption"),
                    1696 => new TraitLineTrait(1696, "Parasitic Contagion"),
                    1883 => new TraitLineTrait(1883, "Terrifying Descent"),
                    2013 => new TraitLineTrait(2013, "Plague Sending")
                )), 
            2 => new TraitLine(2, "Death Magic", array(
                    839 => new TraitLineTrait(839, "Soul Comprehension"),
                    856 => new TraitLineTrait(856, "Armored Shroud"),
                    1929 => new TraitLineTrait(1929, "Beyond the Veil")
                ), array(
                    820 => new TraitLineTrait(820, "Flesh of the Master"),
                    842 => new TraitLineTrait(842, "Death Nova"),
                    855 => new TraitLineTrait(855, "Deadly Strength", array(new TraitPercentageModifier(Attribute::Power, 0.07, Attribute::Toughness))),
                    857 => new TraitLineTrait(857, "Shrouded Removal"),
                    858 => new TraitLineTrait(858, "Necromantic Corruption"),
                    860 => new TraitLineTrait(860, "Reaper's Protection"),
                    1694 => new TraitLineTrait(1694, "Unholy Sanctuary"),
                    1922 => new TraitLineTrait(1922, "Putrid Defense"),
                    1940 => new TraitLineTrait(1940, "Corrupter's Fervor")
                )), 
            19 => new TraitLine(19, "Blood Magic", array(
                    783 => new TraitLineTrait(783, "Vampiric"),
                    792 => new TraitLineTrait(792, "Mark of Evasion"),
                    1931 => new TraitLineTrait(1931, "Last Rites", array(new FlatModifier(Attribute::Healing_Power, 150)))
                ), array(
                    778 => new TraitLineTrait(778, "Transfusion"),
                    780 => new TraitLineTrait(780, "Ritual of Life"),
                    782 => new TraitLineTrait(782, "Vampiric Rituals"),
                    788 => new TraitLineTrait(788, "Quickening Thirst"),
                    789 => new TraitLineTrait(789, "Life from Death"),
                    799 => new TraitLineTrait(799, "Banshee's Wail"),
                    1692 => new TraitLineTrait(1692, "Unholy Martyr"),
                    1844 => new TraitLineTrait(1844, "Vampiric Presence"),
                    1876 => new TraitLineTrait(1876, "Blood Bond")
                )), 
            50 => new TraitLine(50, "Soul Reaping", array(
                    874 => new TraitLineTrait(874, "Strength of Undeath"),
                    887 => new TraitLineTrait(887, "Gluttony"),
                    891 => new TraitLineTrait(891, "Last Gasp")
                ), array(
                    861 => new TraitLineTrait(861, "Vital Persistence", array(new FlatModifier(Attribute::Vitality, 180))),
                    875 => new TraitLineTrait(875, "Unyielding Blast"),
                    888 => new TraitLineTrait(888, "Speed of Shadows"),
                    889 => new TraitLineTrait(889, "Foot in the Grave"),
                    892 => new TraitLineTrait(892, "Fear of Death"),
                    893 => new TraitLineTrait(893, "Death Perception"),
                    894 => new TraitLineTrait(894, "Spectral Mastery"),
                    898 => new TraitLineTrait(898, "Soul Marks"),
                    905 => new TraitLineTrait(905, "Dhuumfire")
                )), 
            34 => new TraitLine(34, "Reaper", array(
                    1879 => new TraitLineTrait(1879, "Shivers of Dread"),
                    1905 => new TraitLineTrait(1905, "Shroud Knight"),
                    2018 => new TraitLineTrait(2018, "Cold Shoulder")
                ), array(
                    1919 => new TraitLineTrait(1919, "Deathly Chill"),
                    1932 => new TraitLineTrait(1932, "Blighter's Boon"),
                    1969 => new TraitLineTrait(1969, "Soul Eater"),
                    1974 => new TraitLineTrait(1974, "Augury of Death"),
                    2008 => new TraitLineTrait(2008, "Chilling Victory"),
                    2020 => new TraitLineTrait(2020, "Chilling Nova"),
                    2021 => new TraitLineTrait(2021, "Reaper's Onslaught"),
                    2026 => new TraitLineTrait(2026, "Relentless Pursuit"),
                    2031 => new TraitLineTrait(2031, "Decimate Defenses")
                )), 
            60 => new TraitLine(60, "Scourge", array(
                    2096 => new TraitLineTrait(2096, "Blood as Sand"),
                    2121 => new TraitLineTrait(2121, "Sand Sage"),
                    2147 => new TraitLineTrait(2147, "Mantle of Sand")
                ), array(
                    2059 => new TraitLineTrait(2059, "Desert Empowerment"),
                    2067 => new TraitLineTrait(2067, "Sadistic Searing"),
                    2074 => new TraitLineTrait(2074, "Fell Beacon", new TraitPercentageModifier(Attribute::Expertise, 0.1, Attribute::Condition_Damage)),
                    2080 => new TraitLineTrait(2080, "Feed from Corruption"),
                    2102 => new TraitLineTrait(2102, "Nourishing Rot"),
                    2112 => new TraitLineTrait(2112, "Sand Savant"),
                    2123 => new TraitLineTrait(2123, "Unending Corruption"),
                    2164 => new TraitLineTrait(2164, "Demonic Lore"),
                    2167 => new TraitLineTrait(2167, "Abrasive Grit")
                ))
        ))
    );

?> 