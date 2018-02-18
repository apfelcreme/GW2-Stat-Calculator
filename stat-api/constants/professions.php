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
        ), array(
            # Heal
            14389 => new Skill(14389, "Healing Signet", array()), 
            14401 => new Skill(14401, "Mending", array()), 
            14402 => new Skill(14402, "'To the Limit!'", array()), 
            21815 => new Skill(21815, "Defiant Stance", array()), 
            30189 => new Skill(30189, "Blood Reckoning", array()), 
            41100 => new Skill(41100, "Natural Healing", array()),            
            # Utility
            14354 => new Skill(14354, "Throw Bolas", array()), 
            14368 => new Skill(14368, "Frenzy", array()), 
            14372 => new Skill(14372, "'Shake It Off!'", array()), 
            14388 => new Skill(14388, "Stomp", array()), 
            14392 => new Skill(14392, "Endure Pain", array()), 
            14403 => new Skill(14403, "'For Great Justice!'", array()), 
            14404 => new Skill(14404, "Signet of Might", array(new FlatModifier(Attribute::Power, 180))), 
            14405 => new Skill(14405, "Banner of Strength", array()), 
            14406 => new Skill(14406, "Berserker Stance", array()), 
            14407 => new Skill(14407, "Banner of Discipline", array()), 
            14408 => new Skill(14408, "Banner of Tactics", array()), 
            14409 => new Skill(14409, "'Fear Me!'", array()), 
            14410 => new Skill(14410, "Signet of Fury", array(new FlatModifier(Attribute::Precision, 180))), 
            14412 => new Skill(14412, "Balanced Stance", array()), 
            14413 => new Skill(14413, "Dolyak Signet", array(new FlatModifier(Attribute::Toughness, 180))), 
            14479 => new Skill(14479, "Signet of Stamina", array()), 
            14502 => new Skill(14502, "Kick", array()), 
            14516 => new Skill(14516, "Bull's Charge", array()), 
            14528 => new Skill(14528, "Banner of Defense", array()), 
            14570 => new Skill(14570, "Banner of Defense", array()), 
            14571 => new Skill(14571, "Banner of Discipline", array()), 
            14572 => new Skill(14572, "Banner of Strength", array()), 
            14573 => new Skill(14573, "Banner of Tactics", array()), 
            14575 => new Skill(14575, "'On My Mark!'", array()), 
            29613 => new Skill(29613, "Sundering Leap", array()), 
            29941 => new Skill(29941, "Wild Blow", array()), 
            30074 => new Skill(30074, "Shattering Blow", array()), 
            30258 => new Skill(30258, "Outrage", array()), 
            41919 => new Skill(41919, "Imminent Threat", array()), 
            43123 => new Skill(43123, "Break Enchantments", array()), 
            43745 => new Skill(43745, "Sight beyond Sight", array()), 
            45380 => new Skill(45380, "Featherfoot Grace", array()), 
            # Elite
            14355 => new Skill(14355, "Signet of Rage", array()), 
            14419 => new Skill(14419, "Battle Standard", array()), 
            14483 => new Skill(14483, "Rampage", array()), 
            14569 => new Skill(14569, "Battle Standard", array()), 
            30343 => new Skill(30343, "Head Butt", array()), 
            45333 => new Skill(45333, "Winds of Disenchantment", array())
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
        ), array(
            # Heal
            9083 => new Skill(9083, "'Receive the Light!'", array()), 
            9102 => new Skill(9102, "Shelter", array()), 
            9158 => new Skill(9158, "Signet of Resolve", array()), 
            12360 => new Skill(12360, "Prayer to Dwayna", array()), 
            12440 => new Skill(12440, "Healing Seed", array()), 
            21664 => new Skill(21664, "Litany of Wrath", array()), 
            30025 => new Skill(30025, "Purification", array()), 
            41475 => new Skill(41475, "Restoring Reprieve", array()), 
            41714 => new Skill(41714, "Mantra of Solace", array()), 
            42960 => new Skill(42960, "Rejuvenating Respite", array()),
            # Utility
            9084 => new Skill(9084, "'Retreat!'", array()), 
            9085 => new Skill(9085, "'Save Yourselves!'", array()), 
            9093 => new Skill(9093, "Bane Signet", array(new FlatModifier(Attribute::Power, 180))), 
            9125 => new Skill(9125, "Hammer of Wisdom", array()), 
            9128 => new Skill(9128, "Sanctuary", array()), 
            9150 => new Skill(9150, "Signet of Judgment", array()), 
            9151 => new Skill(9151, "Signet of Wrath", array(new FlatModifier(Attribute::Condition_Damage, 180))), 
            9152 => new Skill(9152, "'Hold the Line!'", array()), 
            9153 => new Skill(9153, "'Stand Your Ground!'", array()), 
            9163 => new Skill(9163, "Signet of Mercy", array(new FlatModifier(Attribute::Healing_Power, 180))), 
            9168 => new Skill(9168, "Sword of Justice", array()), 
            9175 => new Skill(9175, "Bow of Truth", array()), 
            9182 => new Skill(9182, "Shield of the Avenger", array()), 
            9187 => new Skill(9187, "Purging Flames", array()), 
            9241 => new Skill(9241, "Bane Signet", array()), 
            9242 => new Skill(9242, "Signet of Judgment", array()), 
            9243 => new Skill(9243, "Signet of Mercy", array(new FlatModifier(Attribute::Healing_Power, 180))), 
            9244 => new Skill(9244, "Signet of Wrath", array(new FlatModifier(Attribute::Condition_Damage, 180))), 
            9245 => new Skill(9245, "Smite Condition", array()), 
            9246 => new Skill(9246, "Merciful Intervention", array()), 
            9247 => new Skill(9247, "Judge's Intervention", array()), 
            9248 => new Skill(9248, "Contemplation of Purity", array()), 
            9251 => new Skill(9251, "Wall of Reflection", array()), 
            9253 => new Skill(9253, "Hallowed Ground", array()), 
            12318 => new Skill(12318, "Technobabble", array()), 
            12319 => new Skill(12319, "Radiation Field", array()), 
            12320 => new Skill(12320, "Pain Inverter", array()), 
            12337 => new Skill(12337, "Shrapnel Mine", array()), 
            12338 => new Skill(12338, "Battle Roar", array()), 
            12339 => new Skill(12339, "Hidden Pistol", array()), 
            12361 => new Skill(12361, "Prayer to Kormir", array()), 
            12362 => new Skill(12362, "Prayer to Lyssa", array()), 
            12387 => new Skill(12387, "Call Owl", array()), 
            12417 => new Skill(12417, "Call Wurm", array()), 
            12453 => new Skill(12453, "Grasping Vines", array()), 
            12456 => new Skill(12456, "Seed Turret", array()), 
            24414 => new Skill(24414, "Signet of Mercy", array(new FlatModifier(Attribute::Healing_Power, 180))), 
            24415 => new Skill(24415, "Signet of Mercy", array(new FlatModifier(Attribute::Healing_Power, 180))), 
            29786 => new Skill(29786, "Test of Faith", array()), 
            30364 => new Skill(30364, "Procession of Blades", array()), 
            30553 => new Skill(30553, "Fragments of Faith", array()), 
            30871 => new Skill(30871, "Light's Judgment", array()), 
            31159 => new Skill(31159, "Purging Flames", array()), 
            31295 => new Skill(31295, "Sanctuary", array()), 
            40915 => new Skill(40915, "Mantra of Potence", array()), 
            41571 => new Skill(41571, "Shield of the Avenger", array()), 
            41988 => new Skill(41988, "Overwhelming Celerity", array()), 
            42360 => new Skill(42360, "Echo of Truth", array()), 
            42864 => new Skill(42864, "Opening Passage", array()), 
            42924 => new Skill(42924, "Flame Surge", array()), 
            42983 => new Skill(42983, "Potent Haste", array()), 
            43565 => new Skill(43565, "Bow of Truth", array()), 
            44008 => new Skill(44008, "Voice of Truth", array()), 
            44080 => new Skill(44080, "Mantra of Truth", array()), 
            44248 => new Skill(44248, "Clarified Conclusion", array()), 
            44846 => new Skill(44846, "Sword of Justice", array()), 
            45082 => new Skill(45082, "Flame Rush", array()), 
            45460 => new Skill(45460, "Mantra of Lore", array()), 
            46148 => new Skill(46148, "Mantra of Flame", array()), 
            46170 => new Skill(46170, "Hammer of Wisdom", array()), 
            46600 => new Skill(46600, "Bow of Truth", array()), 
            46750 => new Skill(46750, "Bow of Truth", array()), 
            # Elite
            9154 => new Skill(9154, "Renewed Focus", array()), 
            10800 => new Skill(10800, "Mistfire Wolf", array()), 
            12323 => new Skill(12323, "Summon 7-Series Golem", array()), 
            12324 => new Skill(12324, "Summon D-Series Golem", array()), 
            12325 => new Skill(12325, "Summon Power Suit", array()), 
            12340 => new Skill(12340, "Warband Support", array()), 
            12343 => new Skill(12343, "Artillery Barrage", array()), 
            12344 => new Skill(12344, "Charrzooka", array()), 
            12363 => new Skill(12363, "Hounds of Balthazar", array()), 
            12367 => new Skill(12367, "Reaper of Grenth", array()), 
            12372 => new Skill(12372, "Remove Avatar of Melandru", array()), 
            12373 => new Skill(12373, "Avatar of Melandru", array()), 
            12385 => new Skill(12385, "Become the Bear", array()), 
            12386 => new Skill(12386, "Release the Bear", array()), 
            12391 => new Skill(12391, "Become the Wolf", array()), 
            12392 => new Skill(12392, "Release the Wolf", array()), 
            12401 => new Skill(12401, "Become the Snow Leopard", array()), 
            12402 => new Skill(12402, "Release the Snow Leopard", array()), 
            12403 => new Skill(12403, "Become the Raven", array()), 
            12404 => new Skill(12404, "Release the Raven", array()), 
            12447 => new Skill(12447, "Summon Druid Spirit", array()), 
            12450 => new Skill(12450, "Summon Sylvan Hound", array()), 
            12457 => new Skill(12457, "Take Root", array()), 
            29965 => new Skill(29965, "'Feel My Wrath!'", array()), 
            30273 => new Skill(30273, "Dragon's Maw", array()), 
            30461 => new Skill(30461, "Signet of Courage", array()), 
            40114 => new Skill(40114, "Portent of Freedom", array()), 
            41328 => new Skill(41328, "Unhindered Delivery", array()), 
            43357 => new Skill(43357, "Mantra of Liberation", array())
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
        ), array(
            # Heal
            26937 => new Skill(26937, "Enchanted Daggers", array()), 
            27220 => new Skill(27220, "Facet of Light", array()), 
            27228 => new Skill(27228, "Infuse Light", array()), 
            27372 => new Skill(27372, "Soothing Stone", array()), 
            28219 => new Skill(28219, "Empowering Misery", array()), 
            28427 => new Skill(28427, "Ventari's Will", array()), 
            29148 => new Skill(29148, "Project Tranquility", array()), 
            45686 => new Skill(45686, "Breakrazor's Bastion", array()), 
            # Utility
            26557 => new Skill(26557, "Vengeful Hammers", array()), 
            26644 => new Skill(26644, "Facet of Strength", array()), 
            26679 => new Skill(26679, "Forced Engagement", array()), 
            26821 => new Skill(26821, "Protective Solace", array()), 
            26956 => new Skill(26956, "Release Hammers", array()), 
            27014 => new Skill(27014, "Facet of Elements", array()), 
            27025 => new Skill(27025, "Natural Harmony", array()), 
            27080 => new Skill(27080, "Gaze of Darkness", array()), 
            27107 => new Skill(27107, "Impossible Odds", array()), 
            27162 => new Skill(27162, "Elemental Blast", array()), 
            27322 => new Skill(27322, "Pain Absorption", array()), 
            27505 => new Skill(27505, "Banish Enchantment", array()), 
            27628 => new Skill(27628, "Diminish Solace", array()), 
            27715 => new Skill(27715, "Purifying Essence", array()), 
            27917 => new Skill(27917, "Unyielding Anguish", array()), 
            28113 => new Skill(28113, "Burst of Strength", array()), 
            28231 => new Skill(28231, "Phase Traversal", array()), 
            28379 => new Skill(28379, "Facet of Darkness", array()), 
            28382 => new Skill(28382, "Relinquish Power", array()), 
            28516 => new Skill(28516, "Inspiring Reinforcement", array()), 
            29082 => new Skill(29082, "Natural Harmony", array()), 
            29197 => new Skill(29197, "Purifying Essence", array()), 
            29209 => new Skill(29209, "Riposting Shadows", array()), 
            29310 => new Skill(29310, "Protective Solace", array()), 
            31100 => new Skill(31100, "Unyielding Anguish", array()), 
            40485 => new Skill(40485, "Icerazor's Ire", array()), 
            41220 => new Skill(41220, "Darkrazor's Daring", array()), 
            42949 => new Skill(42949, "Razorclaw's Rage", array()), 
            # Elite
            26693 => new Skill(26693, "Resist the Darkness", array()), 
            27356 => new Skill(27356, "Energy Expulsion", array()), 
            27760 => new Skill(27760, "Facet of Chaos", array()), 
            27975 => new Skill(27975, "Rite of the Great Dwarf", array()), 
            28075 => new Skill(28075, "Chaotic Release", array()), 
            28287 => new Skill(28287, "Embrace the Darkness", array()), 
            28406 => new Skill(28406, "Jade Winds", array()), 
            29114 => new Skill(29114, "Energy Expulsion", array()), 
            31294 => new Skill(31294, "Jade Winds", array()), 
            42752 => new Skill(42752, "Dismiss Lieutenant Soulcleave", array()), 
            45773 => new Skill(45773, "Soulcleave's Summit", array()), 
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
        ), array(
            # Heal
            13021 => new Skill(13021, "Withdraw", array()), 
            13027 => new Skill(13027, "Hide in Shadows", array()), 
            13050 => new Skill(13050, "Signet of Malice", array()), 
            21778 => new Skill(21778, "Skelk Venom", array()), 
            30400 => new Skill(30400, "Channeled Vigor", array()), 
            45088 => new Skill(45088, "Malicious Restoration", array()),
            # Utility
            13002 => new Skill(13002, "Shadowstep", array()), 
            13020 => new Skill(13020, "Scorpion Wire", array()), 
            13026 => new Skill(13026, "Needle Trap", array()), 
            13028 => new Skill(13028, "Caltrops", array()), 
            13035 => new Skill(13035, "Roll for Initiative", array()), 
            13037 => new Skill(13037, "Spider Venom", array()), 
            13038 => new Skill(13038, "Shadow Trap", array()), 
            13044 => new Skill(13044, "Blinding Powder", array()), 
            13046 => new Skill(13046, "Assassin's Signet", array(new FlatModifier(Attribute::Power, 180))), 
            13055 => new Skill(13055, "Skale Venom", array()), 
            13056 => new Skill(13056, "Ambush", array()), 
            13057 => new Skill(13057, "Tripwire", array()), 
            13060 => new Skill(13060, "Signet of Shadows", array()), 
            13062 => new Skill(13062, "Signet of Agility", array(new FlatModifier(Attribute::Precision, 180))), 
            13064 => new Skill(13064, "Infiltrator's Signet", array()), 
            13065 => new Skill(13065, "Smoke Screen", array()), 
            13066 => new Skill(13066, "Haste", array()), 
            13093 => new Skill(13093, "Devourer Venom", array()), 
            13096 => new Skill(13096, "Ice Drake Venom", array()), 
            13106 => new Skill(13106, "Shadow Return", array()), 
            13117 => new Skill(13117, "Shadow Refuge", array()), 
            16435 => new Skill(16435, "Destroy Shadow Trap", array()), 
            16436 => new Skill(16436, "Shadow Pursuit", array()), 
            30369 => new Skill(30369, "Impairing Daggers", array()), 
            30519 => new Skill(30519, "Reflexive Strike", array()), 
            30568 => new Skill(30568, "Distracting Daggers", array()), 
            30661 => new Skill(30661, "Bandit's Defense", array()), 
            30693 => new Skill(30693, "Palm Strike", array()), 
            30868 => new Skill(30868, "Fist Flurry", array()), 
            41158 => new Skill(41158, "Shadow Flare", array()), 
            41205 => new Skill(41205, "Binding Shadow", array()), 
            41372 => new Skill(41372, "Mercy", array()), 
            45672 => new Skill(45672, "Shadow Swap", array()), 
            46335 => new Skill(46335, "Shadow Gust", array()), 
            # Elite
            13082 => new Skill(13082, "Thieves Guild", array()), 
            13085 => new Skill(13085, "Dagger Storm", array()), 
            13132 => new Skill(13132, "Basilisk Venom", array()), 
            29516 => new Skill(29516, "Impact Strike", array()), 
            29639 => new Skill(29639, "Finishing Blow", array()), 
            30077 => new Skill(30077, "Uppercut", array()), 
            45508 => new Skill(45508, "Shadow Meld", array())
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
        ), array(
            # Heal
            5802 => new Skill(5802, "Med Kit", array()), 
            5834 => new Skill(5834, "Elixir H", array()), 
            5857 => new Skill(5857, "Healing Turret", array()), 
            5961 => new Skill(5961, "Detonate Healing Turret", array()), 
            5980 => new Skill(5980, "Cleansing Burst", array()), 
            6109 => new Skill(6109, "Stow Med Kit", array()), 
            6140 => new Skill(6140, "Healing Turret", array()), 
            21659 => new Skill(21659, "A.E.D.", array()), 
            29629 => new Skill(29629, "Medic Gyro Self-Destruct", array()), 
            30357 => new Skill(30357, "Medic Gyro", array()), 
            30881 => new Skill(30881, "A.E.D.", array()), 
            40507 => new Skill(40507, "Coolant Blast", array()),
            # Utility
            5805 => new Skill(5805, "Grenade Kit", array()), 
            5811 => new Skill(5811, "Personal Battering Ram", array()), 
            5812 => new Skill(5812, "Bomb Kit", array()), 
            5818 => new Skill(5818, "Rifle Turret", array()), 
            5821 => new Skill(5821, "Elixir B", array()), 
            5825 => new Skill(5825, "Slick Shoes", array()), 
            5836 => new Skill(5836, "Flame Turret", array()), 
            5837 => new Skill(5837, "Net Turret", array()), 
            5838 => new Skill(5838, "Thumper Turret", array()), 
            5860 => new Skill(5860, "Elixir C", array()), 
            5861 => new Skill(5861, "Elixir S", array()), 
            5862 => new Skill(5862, "Elixir U", array()), 
            5865 => new Skill(5865, "Utility Goggles", array()), 
            5874 => new Skill(5874, "Automatic Fire", array()), 
            5889 => new Skill(5889, "Thump", array()), 
            5893 => new Skill(5893, "Electrified Net", array()), 
            5900 => new Skill(5900, "Smoke Screen", array()), 
            5904 => new Skill(5904, "Tool Kit", array()), 
            5910 => new Skill(5910, "Rocket Boots", array()), 
            5912 => new Skill(5912, "Rocket Turret", array()), 
            5913 => new Skill(5913, "Explosive Rockets", array()), 
            5927 => new Skill(5927, "Flamethrower", array()), 
            5933 => new Skill(5933, "Elixir Gun", array()), 
            5957 => new Skill(5957, "Detonate Rifle Turret", array()), 
            5960 => new Skill(5960, "Detonate Thumper Turret", array()), 
            5968 => new Skill(5968, "Elixir R", array()), 
            5984 => new Skill(5984, "Detonate Net Turret", array()), 
            5985 => new Skill(5985, "Detonate Flame Turret", array()), 
            5987 => new Skill(5987, "Flame Turret", array()), 
            5988 => new Skill(5988, "Net Turret", array()), 
            5989 => new Skill(5989, "Rifle Turret", array()), 
            5990 => new Skill(5990, "Thumper Turret", array()), 
            5991 => new Skill(5991, "Rocket Turret", array()), 
            6020 => new Skill(6020, "Grenade Kit", array()), 
            6093 => new Skill(6093, "Harpoon Turret", array()), 
            6097 => new Skill(6097, "Detonate Harpoon Turret", array()), 
            6098 => new Skill(6098, "Automatic Fire", array()), 
            6110 => new Skill(6110, "Stow Grenade Kit", array()), 
            6111 => new Skill(6111, "Stow Bomb Kit", array()), 
            6113 => new Skill(6113, "Stow Tool Kit", array()), 
            6114 => new Skill(6114, "Stow Flamethrower", array()), 
            6115 => new Skill(6115, "Stow Elixir Gun", array()), 
            6134 => new Skill(6134, "Detonate Rocket Turret", array()), 
            6161 => new Skill(6161, "Throw Mine", array()), 
            6162 => new Skill(6162, "Detonate", array()), 
            6163 => new Skill(6163, "Deploy Mine", array()), 
            15800 => new Skill(15800, "Elixir S", array()), 
            22574 => new Skill(22574, "Rocket Turret", array()), 
            29473 => new Skill(29473, "Detonate", array()), 
            29522 => new Skill(29522, "Rocket Boots", array()), 
            29591 => new Skill(29591, "Utility Goggles", array()), 
            29697 => new Skill(29697, "Bulwark Gyro Self-Destruct", array()), 
            29739 => new Skill(29739, "Purge Gyro", array()), 
            29921 => new Skill(29921, "Shredder Gyro", array()), 
            29991 => new Skill(29991, "Personal Battering Ram", array()), 
            30101 => new Skill(30101, "Bulwark Gyro", array()), 
            30112 => new Skill(30112, "Shredder Gyro Self-Destruct", array()), 
            30337 => new Skill(30337, "Throw Mine", array()), 
            30777 => new Skill(30777, "Purge Gyro Self-Destruct", array()), 
            30828 => new Skill(30828, "Slick Shoes", array()), 
            30893 => new Skill(30893, "Deploy Mine", array()), 
            31248 => new Skill(31248, "Blast Gyro Tag", array()), 
            31264 => new Skill(31264, "Blast Gyro Self-Destruct", array()), 
            38748 => new Skill(38748, "Detonate Rocket Turret", array()), 
            40533 => new Skill(40533, "Launch Wall", array()), 
            41218 => new Skill(41218, "Spectrum Shield", array()), 
            42842 => new Skill(42842, "Laser Disk", array()), 
            43739 => new Skill(43739, "Photon Wall", array()), 
            44646 => new Skill(44646, "Hard Light Arena", array()),
            # Elite
            5832 => new Skill(5832, "Elixir X", array()), 
            5868 => new Skill(5868, "Supply Crate", array()), 
            6183 => new Skill(6183, "Supply Crate", array()), 
            20451 => new Skill(20451, "Elixir X", array()), 
            29518 => new Skill(29518, "Detonate Supply Crate Turrets", array()), 
            29905 => new Skill(29905, "Stow Mortar Kit", array()), 
            30230 => new Skill(30230, "Overcharge Supply Crate", array()), 
            30264 => new Skill(30264, "Overcharge Supply Crate", array()), 
            30544 => new Skill(30544, "Sneak Gyro Self-Destruct", array()), 
            30800 => new Skill(30800, "Elite Mortar Kit", array()), 
            30815 => new Skill(30815, "Sneak Gyro", array()), 
            38750 => new Skill(38750, "Detonate Supply Crate Turrets", array()), 
            42009 => new Skill(42009, "Prime Light Beam", array())
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
        ), array(
            # Heal
            12483 => new Skill(12483, "Troll Unguent", array()), 
            12489 => new Skill(12489, "Healing Spring", array()), 
            21773 => new Skill(21773, "Water Spirit", array()), 
            21775 => new Skill(21775, "Aqua Surge", array()), 
            31407 => new Skill(31407, "Glyph of Rejuvenation", array()), 
            31819 => new Skill(31819, "Glyph of Rejuvenation", array()), 
            31867 => new Skill(31867, "Glyph of Rejuvenation", array()), 
            31914 => new Skill(31914, "'We Heal As One!'", array()), 
            44948 => new Skill(44948, "Bear Stance", array()),
            # Utility
            12476 => new Skill(12476, "Spike Trap", array()), 
            12491 => new Skill(12491, "Signet of the Wild", array(new FlatModifier(Attribute::Ferocity, 180))), 
            12492 => new Skill(12492, "Frost Trap", array()), 
            12493 => new Skill(12493, "Storm Spirit", array()), 
            12494 => new Skill(12494, "Lightning Reflexes", array()), 
            12495 => new Skill(12495, "Stone Spirit", array()), 
            12496 => new Skill(12496, "Viper's Nest", array()), 
            12497 => new Skill(12497, "Frost Spirit", array()), 
            12498 => new Skill(12498, "Sun Spirit", array()), 
            12499 => new Skill(12499, "Flame Trap", array()), 
            12500 => new Skill(12500, "Signet of Stone", array(new FlatModifier(Attribute::Toughness, 180))), 
            12501 => new Skill(12501, "Muddy Terrain", array()), 
            12502 => new Skill(12502, "Signet of Renewal", array()), 
            12533 => new Skill(12533, "Viper's Nest", array()), 
            12534 => new Skill(12534, "Spike Trap", array()), 
            12535 => new Skill(12535, "Frost Trap", array()), 
            12537 => new Skill(12537, "Sharpening Stone", array()), 
            12542 => new Skill(12542, "Signet of the Hunt", array()), 
            12550 => new Skill(12550, "Quickening Zephyr", array()), 
            12570 => new Skill(12570, "Flame Trap", array()), 
            12592 => new Skill(12592, "Solar Flare", array()), 
            12593 => new Skill(12593, "Cold Snap", array()), 
            12594 => new Skill(12594, "Call Lightning", array()), 
            12595 => new Skill(12595, "Quicksand", array()), 
            12631 => new Skill(12631, "'Protect Me!'", array()), 
            12632 => new Skill(12632, "'Guard!'", array()), 
            12633 => new Skill(12633, "'Sic 'Em!'", array()), 
            29558 => new Skill(29558, "Glyph of the Tides", array()), 
            30238 => new Skill(30238, "Glyph of the Tides", array()), 
            30448 => new Skill(30448, "Glyph of the Tides", array()), 
            31322 => new Skill(31322, "Glyph of Alignment", array()), 
            31348 => new Skill(31348, "Glyph of Alignment", array()), 
            31401 => new Skill(31401, "Glyph of Equality", array()), 
            31582 => new Skill(31582, "Glyph of Empowerment", array()), 
            31602 => new Skill(31602, "Glyph of Empowerment", array()), 
            31607 => new Skill(31607, "Glyph of Alignment", array()), 
            31658 => new Skill(31658, "Glyph of Equality", array()), 
            31746 => new Skill(31746, "Glyph of Equality", array()), 
            31804 => new Skill(31804, "Glyph of Empowerment", array()), 
            34309 => new Skill(34309, "'Search and Rescue!'", array()), 
            40498 => new Skill(40498, "Vulture Stance", array()), 
            45142 => new Skill(45142, "Griffon Stance", array()), 
            45789 => new Skill(45789, "Dolyak Stance", array()), 
            45970 => new Skill(45970, "Moa Stance", array()), 
            # Elite
            12516 => new Skill(12516, "'Strength of the Pack!'", array()), 
            12569 => new Skill(12569, "Spirit of Nature", array()), 
            12580 => new Skill(12580, "Entangle", array()), 
            12596 => new Skill(12596, "Nature's Renewal", array()), 
            31677 => new Skill(31677, "Glyph of Unity", array()), 
            31740 => new Skill(31740, "Glyph of Unity", array()), 
            31888 => new Skill(31888, "Glyph of Unity", array()), 
            45717 => new Skill(45717, "One Wolf Pack", array()), 
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
        ), array(
            # Heal
            10176 => new Skill(10176, "Ether Feast", array()), 
            10177 => new Skill(10177, "Mirror", array()), 
            10213 => new Skill(10213, "Mantra of Recovery", array()), 
            10214 => new Skill(10214, "Power Return", array()), 
            21750 => new Skill(21750, "Signet of the Ether", array()), 
            30305 => new Skill(30305, "Well of Eternity", array()), 
            40200 => new Skill(40200, "False Oasis", array()), 
            44677 => new Skill(44677, "Mirage Mirror", array()), 
            # Utility
            10185 => new Skill(10185, "Arcane Thievery", array()), 
            10187 => new Skill(10187, "Veil", array()), 
            10197 => new Skill(10197, "Portal Entre", array()), 
            10199 => new Skill(10199, "Portal Exeunt", array()), 
            10200 => new Skill(10200, "Blink", array()), 
            10201 => new Skill(10201, "Decoy", array()), 
            10202 => new Skill(10202, "Mirror Images", array()), 
            10203 => new Skill(10203, "Null Field", array()), 
            10204 => new Skill(10204, "Mantra of Distraction", array()), 
            10206 => new Skill(10206, "Power Lock", array()), 
            10207 => new Skill(10207, "Mantra of Resolve", array()), 
            10209 => new Skill(10209, "Power Cleanse", array()), 
            10211 => new Skill(10211, "Mantra of Pain", array()), 
            10212 => new Skill(10212, "Power Spike", array()), 
            10232 => new Skill(10232, "Signet of Domination", array(new FlatModifier(Attribute::Condition_Damage, 180))), 
            10234 => new Skill(10234, "Signet of Midnight", array()), 
            10236 => new Skill(10236, "Signet of Inspiration", array()), 
            10237 => new Skill(10237, "Mantra of Concentration", array()), 
            10238 => new Skill(10238, "Power Break", array()), 
            10244 => new Skill(10244, "Illusion of Life", array()), 
            10247 => new Skill(10247, "Signet of Illusions", array()), 
            10267 => new Skill(10267, "Phantasmal Disenchanter", array()), 
            10302 => new Skill(10302, "Feedback", array()), 
            10341 => new Skill(10341, "Phantasmal Defender", array()), 
            25541 => new Skill(25541, "Illusion of Life", array()), 
            29526 => new Skill(29526, "Well of Precognition", array()), 
            29578 => new Skill(29578, "Mimic", array()), 
            29856 => new Skill(29856, "Well of Recall", array()), 
            30525 => new Skill(30525, "Well of Calamity", array()), 
            30814 => new Skill(30814, "Well of Action", array()), 
            34326 => new Skill(34326, "Feedback", array()), 
            41065 => new Skill(41065, "Crystal Sands", array()), 
            42851 => new Skill(42851, "Mirage Advance", array()), 
            43064 => new Skill(43064, "Sand through Glass", array()), 
            45046 => new Skill(45046, "Illusionary Ambush", array()), 
            45666 => new Skill(45666, "Mirage Retreat", array()), 
            # Elite
            10245 => new Skill(10245, "Mass Invisibility", array()), 
            10311 => new Skill(10311, "Time Warp", array()), 
            10377 => new Skill(10377, "Time Warp", array()), 
            29519 => new Skill(29519, "Signet of Humility", array()), 
            30359 => new Skill(30359, "Gravity Well", array()), 
            45449 => new Skill(45449, "Jaunt", array())
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
        ), array(
            # Heal
            5503 => new Skill(5503, "Signet of Restoration", array()), 
            5507 => new Skill(5507, "Ether Renewal", array()), 
            5569 => new Skill(5569, "Glyph of Elemental Harmony", array()), 
            21656 => new Skill(21656, "Arcane Brilliance", array()), 
            29535 => new Skill(29535, "'Wash the Pain Away!'", array()), 
            34609 => new Skill(34609, "Glyph of Elemental Harmony", array()), 
            34651 => new Skill(34651, "Glyph of Elemental Harmony", array()), 
            34724 => new Skill(34724, "Glyph of Elemental Harmony", array()), 
            34743 => new Skill(34743, "Glyph of Elemental Harmony", array()), 
            44239 => new Skill(44239, "Aquatic Stance", array()),  
            # Utility
            5502 => new Skill(5502, "Glyph of Lesser Elementals", array()), 
            5506 => new Skill(5506, "Glyph of Elemental Power", array()), 
            5535 => new Skill(5535, "Cleansing Fire", array()), 
            5536 => new Skill(5536, "Lightning Flash", array()), 
            5539 => new Skill(5539, "Arcane Blast", array()), 
            5540 => new Skill(5540, "Conjure Flame Axe", array()), 
            5542 => new Skill(5542, "Signet of Fire", array(new FlatModifier(Attribute::Precision, 180))), 
            5546 => new Skill(5546, "Conjure Earth Shield", array()), 
            5554 => new Skill(5554, "Mist Form", array()), 
            5567 => new Skill(5567, "Conjure Frost Bow", array()), 
            5570 => new Skill(5570, "Signet of Water", array()), 
            5571 => new Skill(5571, "Signet of Earth", array(new FlatModifier(Attribute::Toughness, 180))), 
            5572 => new Skill(5572, "Signet of Air", array()), 
            5573 => new Skill(5573, "Glyph of Renewal", array()), 
            5624 => new Skill(5624, "Conjure Lightning Hammer", array()), 
            5635 => new Skill(5635, "Arcane Power", array()), 
            5638 => new Skill(5638, "Arcane Wave", array()), 
            5639 => new Skill(5639, "Armor of Earth", array()), 
            5641 => new Skill(5641, "Arcane Shield", array()), 
            5706 => new Skill(5706, "Glyph of Summoning", array()), 
            5734 => new Skill(5734, "Glyph of Storms", array()), 
            5735 => new Skill(5735, "Ice Storm", array()), 
            5736 => new Skill(5736, "Firestorm", array()), 
            5737 => new Skill(5737, "Lightning Storm", array()), 
            5738 => new Skill(5738, "Sandstorm", array()), 
            5760 => new Skill(5760, "Renewal of Air", array()), 
            5761 => new Skill(5761, "Renewal of Earth", array()), 
            5762 => new Skill(5762, "Renewal of Fire", array()), 
            5763 => new Skill(5763, "Renewal of Water", array()), 
            15795 => new Skill(15795, "Mist Form", array()), 
            22572 => new Skill(22572, "Arcane Wave", array()), 
            24407 => new Skill(24407, "Renewal of Fire", array()), 
            24409 => new Skill(24409, "Renewal of Air", array()), 
            24410 => new Skill(24410, "Renewal of Water", array()), 
            24411 => new Skill(24411, "Renewal of Earth", array()), 
            25476 => new Skill(25476, "Frozen Ground", array()), 
            25478 => new Skill(25478, "Windborne Speed", array()), 
            25486 => new Skill(25486, "Glyph of Lesser Elementals", array()), 
            25487 => new Skill(25487, "Glyph of Lesser Elementals", array()), 
            25494 => new Skill(25494, "Enervating Punch", array()), 
            25495 => new Skill(25495, "Glyph of Lesser Elementals", array()), 
            25497 => new Skill(25497, "Glyph of Lesser Elementals", array()), 
            25500 => new Skill(25500, "Flame Burst", array()), 
            29948 => new Skill(29948, "'Flash-Freeze!'", array()), 
            30047 => new Skill(30047, "'Eye of the Storm!'", array()), 
            30432 => new Skill(30432, "'Aftershock!'", array()), 
            30662 => new Skill(30662, "'Feel the Burn!'", array()), 
            34637 => new Skill(34637, "Glyph of Elemental Power", array()), 
            34714 => new Skill(34714, "Glyph of Elemental Power", array()), 
            34736 => new Skill(34736, "Glyph of Elemental Power", array()), 
            34772 => new Skill(34772, "Glyph of Elemental Power", array()), 
            40183 => new Skill(40183, "Primordial Stance", array()), 
            44612 => new Skill(44612, "Unravel", array()), 
            44926 => new Skill(44926, "Stone Resonance", array()), 
            45746 => new Skill(45746, "Twist of Fate", array()), 
            49056 => new Skill(49056, "Signet of Water", array()), 
            # Elite
            5516 => new Skill(5516, "Conjure Fiery Greatsword", array()), 
            5534 => new Skill(5534, "Tornado", array()), 
            5602 => new Skill(5602, "Whirlpool", array()), 
            5666 => new Skill(5666, "Glyph of Elementals", array()), 
            25480 => new Skill(25480, "Shocking Bolt", array()), 
            25488 => new Skill(25488, "Glyph of Elementals", array()), 
            25489 => new Skill(25489, "Glyph of Elementals", array()), 
            25490 => new Skill(25490, "Glyph of Elementals", array()), 
            25491 => new Skill(25491, "Glyph of Elementals", array()), 
            25492 => new Skill(25492, "Crashing Waves", array()), 
            25498 => new Skill(25498, "Stomp", array()), 
            25499 => new Skill(25499, "Flame Barrage", array()), 
            29968 => new Skill(29968, "'Rebound!'", array()), 
            43638 => new Skill(43638, "Weave Self", array()), 
            44637 => new Skill(44637, "Tailored Victory", array()), 
            44918 => new Skill(44918, "Lesser Fiery Eruption", array())
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
        ), array(
            # Heal
            10527 => new Skill(10527, "Well of Blood", array()), 
            10547 => new Skill(10547, "Summon Blood Fiend", array()), 
            10548 => new Skill(10548, "Consume Conditions", array()), 
            10577 => new Skill(10577, "Taste of Death", array()), 
            10670 => new Skill(10670, "Well of Blood", array()), 
            21762 => new Skill(21762, "Signet of Vampirism", array()), 
            30488 => new Skill(30488, "'Your Soul Is Mine!'", array()), 
            43148 => new Skill(43148, "Sand Flare", array()), 
            # Utility
            10533 => new Skill(10533, "Summon Bone Fiend", array()), 
            10540 => new Skill(10540, "Putrid Explosion", array()), 
            10541 => new Skill(10541, "Summon Bone Minions", array()), 
            10543 => new Skill(10543, "Summon Flesh Wurm", array()), 
            10544 => new Skill(10544, "Blood Is Power", array()), 
            10545 => new Skill(10545, "Well of Corruption", array()), 
            10546 => new Skill(10546, "Well of Suffering", array()), 
            10562 => new Skill(10562, "Plague Signet", array()), 
            10570 => new Skill(10570, "Rigor Mortis", array()), 
            10583 => new Skill(10583, "Spectral Armor", array()), 
            10589 => new Skill(10589, "Summon Shadow Fiend", array()), 
            10590 => new Skill(10590, "Haunt", array()), 
            10600 => new Skill(10600, "Necrotic Traversal", array()), 
            10602 => new Skill(10602, "Corrupt Boon", array()), 
            10606 => new Skill(10606, "Epidemic", array()), 
            10607 => new Skill(10607, "Well of Darkness", array()), 
            10608 => new Skill(10608, "Spectral Wall", array()), 
            10609 => new Skill(10609, "Well of Power", array()), 
            10611 => new Skill(10611, "Signet of Undeath", array()), 
            10612 => new Skill(10612, "Signet of the Locust", array()), 
            10620 => new Skill(10620, "Spectral Grasp", array()), 
            10622 => new Skill(10622, "Signet of Spite", array(new FlatModifier(Attribute::Power, 180))), 
            10671 => new Skill(10671, "Well of Corruption", array()), 
            10672 => new Skill(10672, "Well of Darkness", array()), 
            10673 => new Skill(10673, "Well of Power", array()), 
            10674 => new Skill(10674, "Well of Suffering", array()), 
            10685 => new Skill(10685, "Spectral Walk", array()), 
            10687 => new Skill(10687, "Spectral Recall", array()), 
            10689 => new Skill(10689, "Corrosive Poison Cloud", array()), 
            24544 => new Skill(24544, "Signet of Undeath", array()), 
            29414 => new Skill(29414, "'You Are All Weaklings!'", array()), 
            29666 => new Skill(29666, "'Nothing Can Save You!'", array()), 
            30670 => new Skill(30670, "'Suffer!'", array()), 
            30772 => new Skill(30772, "'Rise!'", array()), 
            40274 => new Skill(40274, "Trail of Anguish", array()), 
            41615 => new Skill(41615, "Serpent Siphon", array()), 
            42917 => new Skill(42917, "Sand Swell", array()), 
            42935 => new Skill(42935, "Dessicate", array()), 
            # Elite
            10549 => new Skill(10549, "Plaguelands", array()), 
            10550 => new Skill(10550, "Lich Form", array()), 
            10646 => new Skill(10646, "Summon Flesh Golem", array()), 
            10647 => new Skill(10647, "Charge", array()), 
            30105 => new Skill(30105, "'Chilled to the Bone!'", array()), 
            42355 => new Skill(42355, "Ghastly Breach", array())
        ))
    );

?> 