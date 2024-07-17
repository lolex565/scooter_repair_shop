#
# TABLE STRUCTURE FOR: client
#

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (1, 'Jarvis', 'McLaughlin', '864.800.0254x3584');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (2, 'Effie', 'Rogahn', '702-271-7139x77282');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (3, 'Kylee', 'Hegmann', '(032)158-3094x793');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (4, 'Joey', 'Hermiston', '(240)831-9882');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (5, 'Loren', 'Schuppe', '244-503-3615x9804');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (6, 'Jena', 'Kohler', '903-897-8632');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (7, 'Keagan', 'Upton', '564.836.6365');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (8, 'Gerson', 'Swaniawski', '+51(4)9205165659');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (9, 'Conner', 'Ruecker', '01511659260');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (10, 'Hadley', 'Paucek', '+01(8)6612836786');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (11, 'Kelli', 'Blick', '290-771-2938x545');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (12, 'Yolanda', 'Hills', '(252)048-9687');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (13, 'Marilou', 'Marvin', '745-765-1296x619');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (14, 'Gianni', 'Kris', '04415311084');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (15, 'Raoul', 'Carter', '(979)022-1953');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (16, 'Blake', 'Ledner', '+69(4)7935541577');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (17, 'Randi', 'Keeling', '1-834-680-4442x796');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (18, 'Talia', 'Daniel', '1-813-001-1162');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (19, 'Elsa', 'Pacocha', '260-198-4009x6177');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (20, 'Nelda', 'Ebert', '(322)514-8997');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (21, 'Zelda', 'Schinner', '1-220-840-9299');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (22, 'Madison', 'Anderson', '869.352.7772');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (23, 'Judy', 'McDermott', '(871)779-9000x4274');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (24, 'Scot', 'Block', '1-706-553-5086x616');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (25, 'Tyrique', 'Mosciski', '247.845.4660');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (26, 'Josie', 'Wolff', '721.511.6908');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (27, 'Everett', 'Rowe', '495.059.4603x5629');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (28, 'Rebekah', 'Prohaska', '(802)597-1922');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (29, 'Lindsay', 'Bergnaum', '204.243.7309x58396');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (30, 'Ebony', 'Luettgen', '1-584-188-6924');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (31, 'Luis', 'Schamberger', '(560)223-6841');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (32, 'Bulah', 'Lindgren', '+18(3)1332751452');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (33, 'Blanche', 'Langosh', '1-135-923-7178x042');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (34, 'Marcelo', 'Wolf', '(318)981-7947x727');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (35, 'Magnolia', 'Lind', '257.196.9960x25315');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (36, 'Lottie', 'Boyer', '1-112-325-1502x895');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (37, 'Oceane', 'Ankunding', '1-590-363-1483');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (38, 'Cathrine', 'Bernhard', '(463)116-6277');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (39, 'Wyatt', 'Crona', '219-941-0298');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (40, 'Scarlett', 'Connelly', '265.472.9723x03376');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (41, 'Jon', 'Flatley', '1-766-102-5254');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (42, 'Katharina', 'Welch', '+98(0)5967463474');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (43, 'Hermina', 'Dickens', '1-218-936-7148');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (44, 'Bailee', 'Heidenreich', '1-893-522-6115');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (45, 'Brock', 'Block', '597.383.1417x6990');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (46, 'Gina', 'Kihn', '(388)892-5052');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (47, 'Finn', 'Flatley', '1-926-387-0514');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (48, 'Reggie', 'Hodkiewicz', '1-950-185-1796x232');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (49, 'Josephine', 'Stokes', '009.542.2751x985');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (50, 'Estel', 'Yost', '203-291-9300');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (51, 'Emilie', 'Witting', '1-407-830-9499');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (52, 'Dariana', 'Gulgowski', '762.397.9077x148');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (53, 'Keanu', 'Lemke', '(848)883-7384x3965');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (54, 'Janis', 'Cruickshank', '1-652-947-1671');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (55, 'Tate', 'Lind', '205.357.7926');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (56, 'Abigale', 'Hilll', '1-930-337-5788');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (57, 'Terrence', 'Doyle', '1-328-083-2030x632');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (58, 'Mertie', 'Haley', '335.898.5108');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (59, 'Felix', 'Huels', '231.585.9301x120');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (60, 'Gunner', 'Batz', '+78(5)5680452466');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (61, 'Bertram', 'Hahn', '204-256-3463x10527');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (62, 'Annabel', 'Schroeder', '03861761014');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (63, 'Judson', 'Runolfsdottir', '397.430.2277x73498');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (64, 'Coleman', 'Brekke', '(321)990-2226');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (65, 'Candida', 'West', '913-685-3760x0906');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (66, 'Alvena', 'Gislason', '(984)019-7087');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (67, 'Jaunita', 'Prosacco', '(497)455-3929');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (68, 'Jordi', 'Quigley', '08806305226');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (69, 'Natasha', 'Weber', '784.587.6014x2078');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (70, 'Kristopher', 'Treutel', '1-728-708-9037x713');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (71, 'Jenifer', 'Renner', '1-405-336-9208x347');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (72, 'Heber', 'Koelpin', '1-165-386-6416x120');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (73, 'Drake', 'Stiedemann', '1-911-892-1383');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (74, 'Lavada', 'Reilly', '(268)744-2021x1335');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (75, 'Pedro', 'Rutherford', '(496)776-1412x949');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (76, 'Clemens', 'Swaniawski', '011-471-9458');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (77, 'Maxine', 'Gulgowski', '(706)997-0695x5098');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (78, 'Agnes', 'Robel', '120-400-5077x8147');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (79, 'Hershel', 'Denesik', '765-905-6611x32152');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (80, 'Elvera', 'Hegmann', '+30(2)9481580876');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (81, 'Jaron', 'Gislason', '(013)480-1539x0063');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (82, 'Eldred', 'Fisher', '1-152-406-5075x273');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (83, 'Jeanie', 'Ziemann', '05058493545');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (84, 'Leta', 'Hilll', '1-199-485-6782x002');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (85, 'Irwin', 'Oberbrunner', '(527)608-3476');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (86, 'Bo', 'Gaylord', '1-113-157-8653x579');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (87, 'Eda', 'Hayes', '349.489.2124');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (88, 'Renee', 'Pacocha', '1-160-015-6543x325');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (89, 'Jett', 'Dooley', '04133437936');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (90, 'Name', 'Ratke', '1-026-434-4255x823');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (91, 'Sterling', 'Schamberger', '(736)931-1305x960');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (92, 'Ona', 'Block', '1-799-727-0800x651');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (93, 'Alan', 'Rutherford', '621.882.1230x5084');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (94, 'Henry', 'Johns', '015.408.3497');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (95, 'Hank', 'Deckow', '1-896-687-4949x957');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (96, 'Camden', 'Schumm', '08541129137');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (97, 'Estefania', 'Kutch', '(106)583-6932x1237');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (98, 'Nathan', 'Kris', '(974)761-9652x5541');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (99, 'Peggie', 'Thiel', '02083337697');
INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`) VALUES (100, 'Tyrese', 'Reilly', '06996664963');


#
# TABLE STRUCTURE FOR: dealer
#

DROP TABLE IF EXISTS `dealer`;

CREATE TABLE `dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (1, 'Rowe, Lubowitz and Walker', '+97(5)6705851538');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (2, 'Muller LLC', '(895)426-6061x0864');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (3, 'Maggio-Kemmer', '02460847747');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (4, 'Champlin, Harris and Friesen', '(882)865-0458x4060');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (5, 'Macejkovic-Herzog', '(707)552-4513x1450');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (6, 'Swaniawski-Olson', '025.209.1430');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (7, 'Mraz, Sipes and Koepp', '(070)542-0409x8111');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (8, 'Fadel, Walter and Bode', '645-472-4078');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (9, 'Batz LLC', '422-678-9032x44993');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (10, 'Harber-Osinski', '(889)205-6994x6011');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (11, 'Bergnaum-Quigley', '173.196.4102x0646');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (12, 'Wolf LLC', '1-908-141-9715x510');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (13, 'Swaniawski and Sons', '1-973-078-5248x827');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (14, 'Howe and Sons', '(120)746-0160x0694');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (15, 'O\'Keefe Inc', '(131)591-4099');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (16, 'Cole and Sons', '(029)295-0292x1284');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (17, 'Brown, Cormier and Marks', '763.142.1297x363');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (18, 'Spinka, Berge and Herman', '291.890.6086');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (19, 'Dooley, Brown and Zboncak', '1-685-833-9424');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (20, 'Rogahn-Turcotte', '(712)559-8110x164');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (21, 'Greenfelder, Sporer and Hilper', '(275)126-3737x4530');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (22, 'Price-Windler', '154.094.7287');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (23, 'Aufderhar, Larkin and Abshire', '009-065-3931x956');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (24, 'Mosciski PLC', '178-263-4608');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (25, 'Denesik Ltd', '1-275-980-0595x452');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (26, 'Block Ltd', '814-006-6284x51577');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (27, 'Walsh-Bartell', '(366)759-7793');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (28, 'Ward Group', '597-282-2376');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (29, 'Bernhard PLC', '911-846-5477x2439');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (30, 'Zboncak, Koelpin and Willms', '1-411-419-5874x619');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (31, 'Moen-Walter', '(730)760-8866x7572');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (32, 'Kautzer-Yundt', '06434629119');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (33, 'Carroll-O\'Connell', '1-467-015-0750');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (34, 'Berge, Anderson and Schmitt', '1-271-183-6617');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (35, 'Cummerata-Beer', '(144)251-7801x0034');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (36, 'McDermott, Hickle and Stark', '(138)788-6114x4393');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (37, 'Steuber-Goyette', '563.674.7670x9838');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (38, 'Upton-Schmidt', '(265)868-2418x3512');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (39, 'Eichmann LLC', '(915)315-2568');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (40, 'Ferry, Jaskolski and Reichert', '549-825-5872x6695');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (41, 'Bruen, Haag and Jakubowski', '+18(3)1319723333');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (42, 'Bayer-Mitchell', '884.075.2500x38965');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (43, 'Veum LLC', '264.468.8699x99884');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (44, 'Carter, Cummings and Bogan', '407.925.5214x5606');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (45, 'Baumbach Group', '01760366660');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (46, 'Oberbrunner Ltd', '(094)711-6396');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (47, 'Schaefer Inc', '181-407-4206x1830');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (48, 'Langosh, Brakus and Douglas', '752.377.9026x48597');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (49, 'Bednar and Sons', '1-989-146-0487x420');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (50, 'Murazik Group', '970-144-5258');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (51, 'Bosco-Bergstrom', '(591)843-6109x8064');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (52, 'Hintz and Sons', '+74(8)4689777764');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (53, 'Sauer PLC', '1-665-136-4207x625');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (54, 'Koss Group', '07987038408');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (55, 'Ziemann-Watsica', '(801)957-0502');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (56, 'Stark Ltd', '478.556.3265');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (57, 'Hoeger, Mitchell and Waters', '1-705-850-2454');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (58, 'Bartoletti, Jakubowski and Gut', '01252670552');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (59, 'Christiansen, Heller and Schul', '1-776-152-0368x372');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (60, 'Dickinson-Stamm', '524-549-0134');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (61, 'Johnson, Bashirian and Schinne', '743.364.5159x6655');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (62, 'Bernier Inc', '023-289-5974x22291');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (63, 'Koch, Ziemann and Corwin', '02972986796');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (64, 'Bergstrom Inc', '1-834-784-3438x516');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (65, 'Miller, Price and Reinger', '1-092-022-6277');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (66, 'Rippin-Mueller', '010-782-1293x68767');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (67, 'Donnelly Group', '1-377-303-9313');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (68, 'Price-Wilkinson', '06979634469');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (69, 'Hahn-Schmidt', '1-879-953-2129x307');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (70, 'Breitenberg Ltd', '888.134.3082x545');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (71, 'Moen Ltd', '+74(1)9271705451');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (72, 'Hyatt LLC', '+47(5)4490241361');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (73, 'Mraz Group', '262.674.1396x9478');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (74, 'Hills, Collier and Torphy', '00739663663');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (75, 'Jacobi-Yundt', '1-671-790-8888x291');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (76, 'Rath Group', '1-244-865-5677x569');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (77, 'Macejkovic and Sons', '811.390.6121x314');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (78, 'Kreiger-Batz', '(552)475-2340x4797');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (79, 'Grant Ltd', '05360009325');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (80, 'Champlin-Huels', '442-648-0661x2415');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (81, 'Hahn-Howell', '418-742-8216x64639');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (82, 'Feeney Ltd', '(023)353-3989x092');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (83, 'McClure PLC', '928-799-3061x65170');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (84, 'Bartoletti Inc', '072-955-7244x7555');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (85, 'Klocko, Jakubowski and Goldner', '+52(4)0621493350');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (86, 'Lesch and Sons', '685.027.7615x2208');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (87, 'Bartoletti-Feil', '817.472.3928');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (88, 'Pacocha-Hane', '+66(6)5892703305');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (89, 'Feest, Torphy and Marks', '(863)288-9928x5956');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (90, 'Mueller, Herman and Kshlerin', '059.960.6489x629');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (91, 'Leannon, Boyle and Jacobson', '(398)371-8798');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (92, 'Graham-DuBuque', '+24(8)4277888085');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (93, 'Mraz Ltd', '036.794.2464x05534');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (94, 'Ritchie-Legros', '847.028.2293x619');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (95, 'Mueller-Botsford', '(539)089-6034x485');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (96, 'Haag, Schuster and Smith', '1-351-755-1736');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (97, 'Considine, Towne and Baumbach', '1-613-248-6378');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (98, 'Kreiger-Rau', '(520)891-7880x5623');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (99, 'Hackett Inc', '155-272-9044x17180');
INSERT INTO `dealer` (`id`, `name`, `phone`) VALUES (100, 'Lemke LLC', '1-353-873-6259');

#
# TABLE STRUCTURE FOR: scooter
#

DROP TABLE IF EXISTS `scooter`;

CREATE TABLE `scooter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `frame_number` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `frame_number` (`frame_number`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (1, 'perferendis', 'eum', '444058922');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (2, 'similique', 'illum', '637622669');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (3, 'repellat', 'provident', '341344112');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (4, 'blanditiis', 'pariatur', '745254962');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (5, 'aut', 'eum', '297241283');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (6, 'id', 'voluptatem', '162392445');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (7, 'recusandae', 'reprehenderit', '392680127');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (8, 'animi', 'recusandae', '420548798');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (9, 'recusandae', 'voluptatum', '674838702');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (10, 'qui', 'temporibus', '541875713');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (11, 'aut', 'similique', '389047032');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (12, 'non', 'dolore', '450137202');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (13, 'ad', 'quae', '155340654');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (14, 'molestiae', 'ex', '171403543');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (15, 'sed', 'deserunt', '868179179');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (16, 'distinctio', 'dolorem', '758442771');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (17, 'culpa', 'velit', '133337139');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (18, 'doloribus', 'minus', '737419078');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (19, 'voluptate', 'ut', '849873202');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (20, 'excepturi', 'sit', '779157242');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (21, 'hic', 'recusandae', '840314458');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (22, 'iure', 'dolor', '243593618');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (23, 'omnis', 'sint', '582712519');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (24, 'et', 'ut', '265823941');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (25, 'cum', 'adipisci', '906554213');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (26, 'quidem', 'at', '230008125');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (27, 'accusantium', 'consequuntur', '521019055');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (28, 'sed', 'illum', '483462736');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (29, 'delectus', 'blanditiis', '295411179');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (30, 'magni', 'aliquid', '881200122');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (31, 'voluptatibus', 'hic', '135785491');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (32, 'aut', 'perspiciatis', '294453268');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (33, 'officiis', 'laudantium', '105100780');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (34, 'ut', 'corrupti', '623498597');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (35, 'et', 'nulla', '953599242');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (36, 'deleniti', 'temporibus', '644986101');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (37, 'officia', 'inventore', '912451393');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (38, 'aliquid', 'consectetur', '423912636');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (39, 'non', 'tempore', '441855798');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (40, 'dignissimos', 'fuga', '360215740');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (41, 'omnis', 'quod', '744797359');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (42, 'et', 'beatae', '556375630');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (43, 'sint', 'libero', '828190561');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (44, 'beatae', 'deleniti', '655897281');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (45, 'aut', 'aut', '364578456');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (46, 'voluptatem', 'maxime', '651678070');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (47, 'nemo', 'itaque', '711601673');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (48, 'minima', 'dolores', '658461241');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (49, 'assumenda', 'qui', '651834352');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (50, 'rerum', 'voluptatem', '118047194');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (51, 'reprehenderit', 'et', '822671292');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (52, 'recusandae', 'qui', '623948967');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (53, 'qui', 'corporis', '834413161');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (54, 'facilis', 'omnis', '243262001');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (55, 'nisi', 'perferendis', '939505205');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (56, 'temporibus', 'voluptas', '503435537');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (57, 'velit', 'perferendis', '179199484');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (58, 'ipsum', 'dolorum', '492299830');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (59, 'vel', 'velit', '411140231');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (60, 'vitae', 'sint', '525430504');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (61, 'doloribus', 'deserunt', '881527341');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (62, 'deleniti', 'eum', '170134359');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (63, 'dolor', 'ducimus', '665606755');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (64, 'quis', 'fugit', '310145392');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (65, 'numquam', 'consequatur', '165958122');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (66, 'dicta', 'et', '515159123');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (67, 'iusto', 'qui', '963208739');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (68, 'quibusdam', 'officia', '409386045');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (69, 'iusto', 'optio', '669472695');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (70, 'rerum', 'et', '212417390');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (71, 'deleniti', 'voluptates', '517760001');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (72, 'delectus', 'ut', '264654845');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (73, 'tempore', 'libero', '171080443');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (74, 'praesentium', 'temporibus', '244728550');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (75, 'laborum', 'similique', '757648647');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (76, 'eaque', 'excepturi', '407739875');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (77, 'optio', 'iusto', '516591125');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (78, 'non', 'provident', '403667281');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (79, 'deserunt', 'est', '727177412');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (80, 'vitae', 'voluptatum', '521350390');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (81, 'aperiam', 'repellat', '335156289');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (82, 'molestias', 'dolores', '423953368');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (83, 'aut', 'doloremque', '543504189');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (84, 'sapiente', 'temporibus', '853075972');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (85, 'eligendi', 'nam', '896584926');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (86, 'eveniet', 'doloremque', '587938072');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (87, 'eum', 'et', '777952805');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (88, 'assumenda', 'optio', '408796843');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (89, 'doloribus', 'fugiat', '251563287');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (90, 'modi', 'sunt', '755788523');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (91, 'vero', 'et', '678092981');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (92, 'iste', 'autem', '611055027');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (93, 'unde', 'iure', '195424793');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (94, 'repellat', 'numquam', '670867191');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (95, 'corrupti', 'rerum', '973112666');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (96, 'soluta', 'suscipit', '345068816');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (97, 'dolor', 'in', '779846875');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (98, 'blanditiis', 'deserunt', '380614026');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (99, 'quia', 'natus', '612450860');
INSERT INTO `scooter` (`id`, `make`, `model`, `frame_number`) VALUES (100, 'ea', 'voluptate', '776571909');

#
# TABLE STRUCTURE FOR: repair_application
#

DROP TABLE IF EXISTS `repair_application`;

CREATE TABLE `repair_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scooter_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_changed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL,
  `status` enum('created','received','in_progress','finished') NOT NULL DEFAULT 'created',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `scooter_id` (`scooter_id`),
  KEY `client_id` (`client_id`),
  KEY `dealer_id` (`dealer_id`),
  CONSTRAINT `repair_application_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealer` (`id`),
  CONSTRAINT `repair_application_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  CONSTRAINT `repair_application_ibfk_3` FOREIGN KEY (`scooter_id`) REFERENCES `scooter` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (1, 1, 1, 1, '1999-08-05 09:42:34', '2011-10-22 18:52:34', 'Culpa quaerat accusamus et doloremque. Dolorem et quidem laborum velit. Tempore ea veritatis repellat rem.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (2, 2, 2, 2, '2021-02-01 06:00:18', '2007-12-16 20:38:57', 'Possimus atque sequi neque magni quaerat totam. Animi et voluptatem eligendi atque voluptatem. Quae facilis nesciunt iure suscipit.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (3, 3, 3, 3, '2008-05-30 01:13:47', '1988-05-14 22:33:18', 'Commodi enim voluptatum ea quos. Quia voluptatem laudantium earum aspernatur expedita quae cupiditate et. Voluptatem modi labore maxime ex veniam fuga. Ad qui nobis pariatur vitae necessitatibus cupiditate odio unde.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (4, 4, 4, 4, '1985-05-16 11:41:16', '1998-08-15 21:11:16', 'Et enim assumenda iste. Vero a nesciunt veritatis. Perferendis quod laboriosam voluptatibus ea possimus explicabo et. Quae dolore officiis saepe.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (5, 5, 5, 5, '2013-08-19 04:31:52', '2019-05-19 10:53:29', 'Ullam quo aut porro pariatur quis libero. Qui dolore explicabo quia aut sint et aperiam distinctio. Nulla nostrum aut numquam. Non rerum nostrum quas.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (6, 6, 6, 6, '1982-10-14 13:00:53', '1985-03-18 01:04:58', 'In neque voluptates delectus autem molestias. Aut provident laborum blanditiis non eos optio. Quam dolores ut ullam exercitationem assumenda non. Quo error odit cum hic eligendi.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (7, 7, 7, 7, '1987-12-21 12:55:29', '2023-10-05 04:37:20', 'Vel aspernatur et ratione repudiandae. Est occaecati consequatur commodi rerum suscipit quidem omnis. Labore expedita est sed quia quis molestias.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (8, 8, 8, 8, '2010-03-01 03:33:43', '2003-04-13 02:23:43', 'Laboriosam quam error dolorem quis eveniet qui aut. Quas maiores reiciendis quasi laudantium occaecati.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (9, 9, 9, 9, '1975-09-07 12:22:50', '2021-11-25 09:44:12', 'Consequatur omnis debitis quas odit repellat et dolor. Alias aut et architecto esse. Est inventore iste sed quo sit qui. Qui sit perferendis quia ad adipisci voluptatem. Consequuntur iste vero totam animi dolorum.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (10, 10, 10, 10, '2001-01-13 21:06:56', '1995-05-10 18:28:05', 'Reprehenderit aut aliquid ex vero quas quaerat. Rerum voluptates similique magnam a molestiae voluptas illum. Iure aut modi aspernatur occaecati assumenda sit voluptatibus.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (11, 11, 11, 11, '1972-09-08 16:39:12', '1989-05-17 06:01:46', 'Porro voluptas aut voluptas excepturi. Suscipit est est et architecto necessitatibus debitis sed. Praesentium et omnis aut doloremque.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (12, 12, 12, 12, '1996-04-26 00:23:45', '1987-06-26 10:04:58', 'Voluptatum voluptas et eius deserunt temporibus reprehenderit et expedita. Aliquid voluptas optio voluptates eligendi numquam aut fugiat. Aut est et doloribus quaerat dolorem quia. Ducimus soluta sit dolore velit iste. Vel tempore sint non porro pariatur.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (13, 13, 13, 13, '2014-03-13 04:42:50', '1994-03-04 07:08:19', 'Laudantium nobis cumque quos aut recusandae expedita id sed. Odit in fuga et. Vero impedit vel molestias deserunt minima voluptatem ut.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (14, 14, 14, 14, '1973-01-03 09:05:40', '1998-06-21 02:54:34', 'Consequatur ut voluptatibus qui sed. Itaque ut dolores veniam expedita. Totam qui perspiciatis vel ut unde. Qui nulla rerum nobis voluptatum.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (15, 15, 15, 15, '2005-01-28 07:29:23', '2019-02-04 15:11:40', 'Impedit impedit ad sit ut distinctio quos nobis vero. Et voluptas ut corrupti quam qui. Fugit modi labore quo corporis porro incidunt sed. Tempore sunt at ad eum deleniti cupiditate et explicabo.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (16, 16, 16, 16, '1994-02-08 01:12:37', '2006-11-27 23:16:47', 'Fuga perspiciatis voluptas unde ducimus omnis pariatur. Beatae atque vel non perferendis iste vel dolore consequuntur. Animi excepturi nostrum omnis vitae. Molestiae incidunt minima unde repellat qui possimus.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (17, 17, 17, 17, '1995-04-29 22:52:57', '1973-02-12 21:11:13', 'Quia est consequatur voluptas error voluptate aut. Omnis eligendi eaque tempore eos quibusdam fuga sunt. Omnis et ratione ea tenetur vel nihil.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (18, 18, 18, 18, '2021-09-22 14:57:43', '2020-04-01 15:24:08', 'Assumenda atque praesentium quaerat temporibus et. Quas distinctio eaque quo ullam eos. Reprehenderit suscipit voluptatum in aut natus quos numquam.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (19, 19, 19, 19, '1983-08-05 01:21:04', '2008-07-07 14:01:15', 'Modi illo asperiores facilis est aut voluptas eos. Occaecati quas harum aperiam harum magni odit voluptatem. Omnis ut veniam dolores dolorem consequuntur vitae.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (20, 20, 20, 20, '2016-04-30 11:01:34', '1987-12-26 13:18:18', 'Enim voluptatem dignissimos at reiciendis ut. Eveniet veritatis dolore modi cum in repudiandae qui. Autem soluta nobis eveniet voluptates atque dolorem at.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (21, 21, 21, 21, '2012-06-16 05:22:02', '1992-02-26 09:04:42', 'Sapiente ut et qui sint repellat sunt quos. Assumenda sunt exercitationem eveniet eum illum. Minima eligendi veniam ad numquam est. Labore et ea porro dolor.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (22, 22, 22, 22, '2003-07-21 18:50:26', '1981-10-07 18:24:35', 'Ipsa qui ipsam accusamus suscipit. Deleniti magnam quisquam iste autem ipsum et.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (23, 23, 23, 23, '1994-05-20 03:43:42', '1991-07-15 16:15:48', 'Non ipsum ab dolores enim voluptas velit ut. Odio voluptas natus et. Omnis omnis autem quia. Magnam est accusantium facilis occaecati incidunt quia.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (24, 24, 24, 24, '2005-08-23 23:30:10', '2012-05-18 17:51:55', 'Quo minima laboriosam non est. Dicta accusamus molestias qui consequatur delectus. A incidunt ab magni eligendi nesciunt repellendus.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (25, 25, 25, 25, '1992-06-19 16:58:03', '1980-02-12 19:11:07', 'Ducimus nihil nemo odit eos voluptatem similique. Vero ea et est laboriosam repellat voluptates rerum. Quam libero qui aut sunt sunt. Itaque dolore excepturi fugit quibusdam dolorem harum.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (26, 26, 26, 26, '2007-04-08 00:41:56', '1995-03-21 11:52:36', 'Magni ut veniam pariatur et. Dolorem quia reprehenderit tempora et. Natus consequatur ullam tempore dolor ducimus tempore est vel. Perferendis doloribus aut minima voluptates nihil quibusdam enim consequuntur.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (27, 27, 27, 27, '1975-02-17 15:11:01', '1982-01-02 23:11:31', 'Nam omnis quia ab sint reiciendis. Quo ipsum consequatur occaecati aperiam doloribus tenetur ut. Sit eos amet qui nihil. Repudiandae modi excepturi magni est in velit maxime.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (28, 28, 28, 28, '1974-01-15 00:30:46', '2001-10-01 21:08:32', 'Deleniti qui sunt in aperiam enim fuga quia. Et quasi est voluptas quae. Et perspiciatis ex debitis expedita accusantium. Illo hic et et et consequatur est omnis.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (29, 29, 29, 29, '2017-04-16 11:22:45', '1996-12-08 06:04:12', 'Nostrum quasi ut optio ut voluptas ipsam. Sunt explicabo eligendi tempora ut et est. Accusamus dolor eum magnam culpa et unde dicta. Aut aut facere numquam ut aliquam.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (30, 30, 30, 30, '1987-01-02 23:58:28', '1973-04-03 18:02:54', 'Officiis aperiam ut quia illum dolor molestiae voluptatem. Ipsum qui eveniet vitae pariatur sapiente. Error consequatur eligendi nesciunt ut et consequatur suscipit facere. Et suscipit porro deleniti rem omnis autem quo.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (31, 31, 31, 31, '1986-04-30 13:11:15', '2001-11-01 20:04:46', 'Illum quia a reiciendis esse deserunt. Maxime corporis rem ut quia est accusamus et. Velit aut quia consequuntur nihil.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (32, 32, 32, 32, '2022-06-08 03:17:41', '1981-10-22 02:57:25', 'Iure unde inventore suscipit magnam quas et quibusdam. Suscipit ut quisquam voluptate similique autem beatae et. Et totam velit possimus. Culpa sit sequi nesciunt eius.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (33, 33, 33, 33, '1977-07-21 10:53:13', '2017-11-26 15:45:47', 'Quo quisquam quis quos. Molestiae enim eum aliquam ut error est nemo labore. Aut corrupti quos nihil nam.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (34, 34, 34, 34, '2004-06-23 19:30:27', '1982-02-01 23:42:23', 'In cumque saepe neque. Vel sint alias quas consequatur. Qui voluptas ratione recusandae doloremque et sit. Non necessitatibus eos quo rerum.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (35, 35, 35, 35, '2003-02-28 06:14:26', '2009-09-11 21:44:36', 'Est odit et facilis sint debitis est. Asperiores explicabo consequuntur suscipit. Esse vel necessitatibus molestias suscipit.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (36, 36, 36, 36, '2001-01-22 08:45:37', '2020-03-23 00:07:50', 'Officiis aut blanditiis suscipit laudantium quibusdam et. Voluptas soluta enim sint necessitatibus. Quia qui labore sed qui deleniti qui aut. Dolore quos et est animi sed.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (37, 37, 37, 37, '1974-10-02 23:07:45', '2017-05-03 14:22:36', 'Molestiae aut in assumenda natus modi earum et. Et deleniti fuga ad rerum. Ut deleniti minima corporis voluptatem commodi ut voluptatem.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (38, 38, 38, 38, '2000-01-06 05:12:00', '2022-03-21 01:50:07', 'Fuga neque ut atque velit. Possimus impedit aut blanditiis minus tempora eius quia dolores. Quisquam odit totam earum unde veniam non. Aliquam molestiae vero natus.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (39, 39, 39, 39, '2000-09-08 11:38:16', '2003-10-23 23:54:50', 'Vel qui mollitia eos quas. Soluta vero error in vero temporibus. Unde et labore animi fuga ut dolorem cumque. Pariatur consequatur error eligendi error exercitationem. Et nesciunt esse quibusdam quo et.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (40, 40, 40, 40, '2012-02-02 21:59:41', '1978-05-23 21:21:00', 'Est dolorem nam at reiciendis repudiandae. Id nihil est deserunt eos voluptatibus quis. Est pariatur possimus optio temporibus. Expedita minus nostrum perferendis magnam nam. Omnis quasi in atque fugit dolores quisquam non.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (41, 41, 41, 41, '2001-09-25 23:25:33', '2009-05-30 06:19:39', 'Molestias quos ea eligendi cupiditate dignissimos placeat sint. Repellendus id earum excepturi accusantium modi voluptas doloribus.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (42, 42, 42, 42, '1981-09-29 13:10:55', '2022-06-13 11:07:41', 'Tempore ducimus quisquam voluptas officia aut qui. Architecto consectetur aut quidem aliquam cumque magnam laudantium. Perferendis et soluta at blanditiis dolores voluptatum qui.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (43, 43, 43, 43, '1989-12-17 10:39:04', '1990-10-29 20:01:28', 'Sit id eaque asperiores iusto iste delectus. Deserunt corrupti maiores ducimus qui ducimus id facilis.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (44, 44, 44, 44, '1987-01-18 02:01:11', '1997-06-25 20:29:24', 'Expedita ratione quis vitae aut sed exercitationem. Corporis quo eveniet debitis quam et dolorum dolore. Dignissimos quaerat voluptatem assumenda nihil enim sit.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (45, 45, 45, 45, '1972-11-26 04:28:44', '1987-03-19 08:44:39', 'Aut debitis sint facilis. Facere et animi minus eum. Molestiae tempore velit ab id libero.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (46, 46, 46, 46, '1982-04-14 09:00:48', '2006-07-04 20:46:44', 'Aliquam sapiente nulla praesentium doloribus temporibus quidem. Perferendis aut molestiae iste eum saepe amet. Facilis eius expedita eum provident odio aut esse voluptas.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (47, 47, 47, 47, '1973-06-21 08:49:33', '1977-08-05 06:21:53', 'Iste vel eveniet provident sed qui qui. Ab mollitia hic minima quo voluptatem. Accusamus et id est possimus. Aut nihil harum aut aspernatur eum voluptas corrupti.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (48, 48, 48, 48, '2010-01-30 20:31:57', '1984-11-03 13:44:21', 'Et quidem ex delectus rerum tempora culpa eum. Amet perspiciatis dolorem vel sint. Neque cupiditate non qui perspiciatis voluptates rerum.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (49, 49, 49, 49, '1972-09-10 10:12:22', '1971-01-19 09:03:06', 'Totam et sed ab ut ut vel id. Eligendi nesciunt ex assumenda expedita pariatur dolore. Accusamus reprehenderit numquam qui nihil commodi.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (50, 50, 50, 50, '2018-09-24 03:20:40', '1979-10-05 01:15:25', 'Mollitia placeat voluptatem ut eum. Blanditiis vero quas enim excepturi. Perspiciatis assumenda voluptatum optio alias laudantium.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (51, 51, 51, 51, '2017-04-21 16:09:33', '2022-08-13 06:58:19', 'Corrupti itaque quibusdam itaque provident molestiae. Nihil illum distinctio autem culpa nulla inventore.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (52, 52, 52, 52, '2009-11-10 22:32:15', '1977-03-19 04:59:50', 'Enim assumenda quo numquam enim nobis molestiae voluptatem. Impedit ut qui voluptas. Ullam qui quae ut ipsum alias aut. Corporis et voluptatem nostrum repudiandae placeat.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (53, 53, 53, 53, '1978-08-24 15:32:50', '2009-09-04 03:23:48', 'Sunt temporibus est sequi eum cum et et aut. Laboriosam harum alias officiis voluptatem facere id. Reiciendis officiis aut omnis ad magnam beatae. Fuga mollitia quia enim eligendi.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (54, 54, 54, 54, '1983-07-31 14:36:29', '1984-06-12 13:43:14', 'Repellat totam ea soluta harum quis natus porro. Suscipit ducimus officiis culpa. Vel explicabo ullam accusamus sed quidem numquam reiciendis. Consequatur unde voluptatem et dolores quam harum explicabo.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (55, 55, 55, 55, '1970-12-07 15:39:32', '2005-01-31 15:56:04', 'Architecto rerum nostrum autem maxime. Quidem corrupti illum est qui aut praesentium. Deleniti est dignissimos qui et aut ut. In repellat aut et tempora. Possimus magnam corrupti dignissimos iure iusto.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (56, 56, 56, 56, '2020-04-20 11:14:07', '1992-04-13 09:35:54', 'Sit quae tempore earum labore et dignissimos earum. Natus itaque fuga maxime. Repellat aspernatur et eaque iure et est. Molestiae velit inventore ut eveniet aut dicta.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (57, 57, 57, 57, '1995-05-01 16:31:18', '1971-12-05 08:56:28', 'Totam alias voluptatem quas vel quo ipsum recusandae vel. Cum sunt ipsa blanditiis sunt asperiores eos distinctio eum. Amet distinctio nesciunt sed in. Non qui molestias aut aliquid omnis rem.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (58, 58, 58, 58, '1997-10-07 03:17:59', '1993-05-30 05:40:29', 'Voluptatem sed laboriosam eum omnis aut. Magnam harum totam autem deserunt.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (59, 59, 59, 59, '1997-05-28 04:26:45', '2012-10-17 02:55:35', 'Sunt velit corporis placeat omnis minima occaecati. Cum at esse sit aspernatur ut. Ut at dolorem numquam aliquid dolor quibusdam repellendus aperiam. Exercitationem et recusandae molestiae adipisci.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (60, 60, 60, 60, '1973-09-06 20:56:20', '1980-09-25 22:24:02', 'Harum reiciendis consequatur velit porro rerum asperiores. Et nisi vel corrupti necessitatibus. Id qui a non tempore aliquam nihil. Tempore ipsum quaerat aliquid accusantium nulla.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (61, 61, 61, 61, '1991-10-04 19:29:14', '2008-01-09 08:38:19', 'Quo ab ut omnis est rerum. Autem provident tempora sapiente et quod.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (62, 62, 62, 62, '2004-09-18 18:57:32', '2021-07-17 22:20:13', 'Ut dicta excepturi quam omnis et et. Voluptatem excepturi officia minima ipsa. Qui eaque et non id rerum non facere.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (63, 63, 63, 63, '2010-09-26 07:54:08', '2007-05-27 08:59:53', 'Facere vel maxime non itaque dolorem quia. Facere natus nihil in ut. Magnam libero sit culpa earum corrupti et et. Pariatur inventore qui autem porro perferendis omnis. Sit cum aspernatur aliquam explicabo eos et provident.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (64, 64, 64, 64, '2011-12-15 17:16:51', '1990-03-05 20:27:29', 'Et fuga sunt ea voluptatibus perferendis. Eum ut aliquid vitae hic ad ut. Consequuntur eos unde ut autem sed. Culpa tenetur quasi atque ea nemo et pariatur in.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (65, 65, 65, 65, '1983-10-05 08:23:13', '2021-01-13 01:11:50', 'Molestias laborum consectetur voluptas. Aliquid omnis esse culpa voluptas impedit aut. Id sunt reprehenderit aut quia. Rem est provident qui consequuntur aut aut est. Quidem saepe dicta explicabo sed laudantium voluptatem.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (66, 66, 66, 66, '1999-01-02 00:10:30', '1994-02-21 08:49:48', 'Omnis est voluptates et. A in provident dolorum recusandae et ut magni. Dolorem consequatur rerum et voluptas corporis et consequuntur sit. Magni in quo voluptatem dolorum.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (67, 67, 67, 67, '2014-04-30 02:36:41', '1990-10-19 11:15:24', 'Eum eaque cum laudantium facere ipsa eos est. Quo cupiditate ex laudantium ut facilis. Deserunt sequi cumque adipisci quos. Consectetur at architecto ratione.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (68, 68, 68, 68, '2004-02-10 14:34:35', '1974-07-15 05:12:44', 'Sapiente est provident architecto molestiae. Nemo esse nisi quod velit aperiam minus earum. Qui et rerum eaque quia maxime aut. Culpa ut laborum quasi recusandae nostrum dolorem dignissimos eius. Harum cum ut necessitatibus iusto eos.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (69, 69, 69, 69, '1979-02-04 04:34:01', '1983-10-03 08:54:06', 'Corrupti provident quasi aperiam amet. Ut nulla tenetur consectetur officiis. Qui saepe sed facere qui. Est quidem non sed sunt voluptas.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (70, 70, 70, 70, '2023-06-29 04:25:51', '2021-07-21 15:12:54', 'Nihil a et delectus nobis et velit est. Enim consequatur dolores sit et et neque corrupti et. Tempore repellat quas dignissimos sit ad. Est pariatur nihil est animi corporis ullam et minima.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (71, 71, 71, 71, '1971-05-04 03:07:12', '1972-02-10 06:45:56', 'Quaerat nihil id fugiat est. Et delectus consequuntur qui fugiat. Dolor architecto dolorem eos voluptas quibusdam debitis.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (72, 72, 72, 72, '2014-08-08 09:32:04', '1974-03-30 15:16:43', 'Omnis pariatur dolor hic sit. Accusamus vero harum rerum ratione quia. Nihil commodi vitae et vero non.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (73, 73, 73, 73, '1997-10-28 23:29:31', '1975-02-10 10:06:34', 'Id exercitationem beatae quia dolorem autem. Beatae omnis qui accusamus. Aliquam harum accusantium ipsam magnam omnis necessitatibus. Eveniet quos doloremque dolor sit quaerat modi. Quia sed id quasi doloribus dicta itaque.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (74, 74, 74, 74, '2017-09-11 04:35:48', '2010-03-24 13:48:16', 'Repudiandae cumque minima consequuntur voluptatem sed. Cum nesciunt et quia dolorem dignissimos perferendis.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (75, 75, 75, 75, '1991-02-12 00:15:57', '1989-06-19 07:09:18', 'Dolorem et fuga ab. In a libero cumque. Et non voluptatem quam sint.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (76, 76, 76, 76, '2010-12-08 12:59:45', '1988-05-18 21:37:35', 'Deleniti doloribus eaque quia unde praesentium. Deleniti repellendus eaque aspernatur laudantium ipsa reprehenderit doloremque aut.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (77, 77, 77, 77, '2014-05-06 09:56:14', '1998-03-13 02:44:12', 'Dolores sunt optio commodi eius labore ducimus. Aut maxime molestiae numquam soluta deleniti. Ullam impedit ratione harum qui et error et. Est modi aliquid quo qui natus.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (78, 78, 78, 78, '1970-03-14 23:20:50', '2012-07-24 23:40:52', 'Minus numquam quod eum ut omnis possimus est. Consequatur sed nam facere dicta. Non suscipit voluptatem ducimus repellat nulla. Numquam est vero quaerat neque.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (79, 79, 79, 79, '2018-05-01 16:58:47', '2010-01-19 23:38:10', 'Repellat sed maiores aut ut vel atque. Et libero totam tempora eum ducimus qui. Nesciunt rerum cum odio quia aut commodi.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (80, 80, 80, 80, '2003-07-20 09:08:33', '1982-09-01 19:11:40', 'Non ut qui maxime modi. Perferendis deleniti inventore aliquam harum aliquam alias.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (81, 81, 81, 81, '2019-05-26 06:50:03', '1979-12-29 12:30:44', 'Quaerat dolorem hic corrupti molestiae. Sed rerum repellat error rerum eos quia. Veritatis ea veniam laudantium dicta consequatur aliquid.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (82, 82, 82, 82, '1994-07-13 22:29:13', '2019-12-30 19:14:08', 'Et totam laboriosam eaque veritatis. Illum natus voluptatem quo blanditiis non molestiae. Sed quo commodi quos sed facere debitis dolores. Dolores a delectus id dignissimos.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (83, 83, 83, 83, '1993-09-11 09:38:01', '2008-04-25 22:47:10', 'Placeat ipsum ratione officiis harum accusantium. Voluptatibus rerum omnis qui.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (84, 84, 84, 84, '2014-01-03 11:31:33', '1994-11-24 15:56:25', 'Dolore ea voluptatem corporis necessitatibus consequatur temporibus dolor repudiandae. Labore voluptas id ut harum non. Aut aut ab eveniet culpa iste molestiae.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (85, 85, 85, 85, '1994-08-09 02:18:37', '1994-08-08 06:02:43', 'Incidunt eos maiores voluptatum dolores quo eius voluptatem ipsam. At nam maiores et sed possimus possimus itaque. Earum dignissimos eos dolor qui reiciendis. Illo autem quibusdam odio dolor aut eius voluptatibus minima.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (86, 86, 86, 86, '2017-08-30 18:08:43', '1999-12-10 11:47:01', 'Tempora voluptates odit odio provident et. Sit iusto adipisci sint ipsum enim quas optio. Est sit id labore voluptatum laudantium nemo.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (87, 87, 87, 87, '2001-09-21 15:33:11', '2021-09-19 04:11:43', 'Beatae voluptates sed sit autem esse et ducimus. Ut ut sed ad maxime pariatur. Id neque officia omnis molestiae repellendus officiis asperiores.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (88, 88, 88, 88, '1979-05-31 03:32:31', '2004-07-19 23:31:06', 'Doloribus quasi deserunt dolor dolorem. Iste suscipit enim est sit. Cum iste in fugiat quibusdam et sint.', 'received');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (89, 89, 89, 89, '2012-03-09 05:35:17', '1991-02-27 14:52:22', 'Possimus omnis accusamus non iure earum. Sit in dolores non. Inventore iure aperiam quisquam quibusdam.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (90, 90, 90, 90, '1993-01-01 15:12:11', '2011-02-04 09:29:33', 'Autem rerum amet quia numquam voluptas qui nihil. Pariatur ullam architecto quo et. Ducimus perferendis repellendus at autem quis. Iste id accusantium fugiat.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (91, 91, 91, 91, '1997-08-25 09:23:16', '2014-10-11 23:24:24', 'Impedit accusantium provident ipsa exercitationem aliquid molestiae aspernatur molestias. In asperiores sit ipsa odit sed tempora. Fugit molestiae quos vero quidem ut non.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (92, 92, 92, 92, '1995-11-12 23:47:03', '1996-08-05 13:46:06', 'Quod suscipit ipsa dicta quia iure perferendis. Libero qui voluptatem laudantium itaque. Necessitatibus consequatur nihil maxime aut eligendi consequatur.', 'created');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (93, 93, 93, 93, '2005-11-12 19:54:53', '2007-07-27 19:04:40', 'Sed quas aut eligendi ratione velit fugit soluta cupiditate. Et corporis ratione quas qui. Vel doloremque et autem praesentium et. Magni hic tempora aliquid assumenda.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (94, 94, 94, 94, '1995-09-19 11:50:23', '1980-05-10 11:34:03', 'Dolores perferendis id distinctio dicta. Facere voluptas enim quo commodi quae. Quam dolorem officiis vitae et consequuntur rerum consequatur. Ad a odit excepturi ut.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (95, 95, 95, 95, '2019-09-07 22:49:53', '1983-02-09 18:18:45', 'Quia aut consequuntur dolorem sed recusandae soluta. Odio sit quis rerum corporis. Quos cum magnam vero similique.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (96, 96, 96, 96, '2014-05-01 03:27:12', '1973-07-12 02:37:07', 'Culpa enim tempora rerum impedit voluptas facilis velit. Omnis cupiditate voluptatem voluptatem in non sed aut. Esse est excepturi molestiae est odio quia sit. Ad molestiae veritatis explicabo vel.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (97, 97, 97, 97, '1990-01-17 04:52:15', '1993-08-03 13:04:38', 'Quod minus assumenda officiis maxime similique inventore praesentium. Sint quis quod voluptatem veniam officia dolor omnis voluptatem. Exercitationem est quia et.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (98, 98, 98, 98, '1994-09-26 21:16:33', '1994-08-30 21:50:24', 'Et totam tempore nihil sapiente neque dicta. Animi voluptate molestiae eum culpa ullam. Voluptate sunt ratione maiores in ut. Magnam sit sunt in rerum aut doloremque enim.', 'finished');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (99, 99, 99, 99, '2003-07-26 13:49:18', '2011-08-25 20:22:21', 'Qui quia nihil odio molestiae aperiam excepturi. Et odio alias reprehenderit omnis debitis. Qui sequi possimus placeat. Animi voluptas deleniti sint natus.', 'in_progress');
INSERT INTO `repair_application` (`id`, `scooter_id`, `client_id`, `dealer_id`, `date_created`, `date_changed`, `description`, `status`) VALUES (100, 100, 100, 100, '1979-04-29 03:41:49', '1979-03-31 20:42:25', 'Officiis consectetur sunt ab repellat voluptatem sit unde amet. Est id fugiat quo est. Itaque dolore vel dolor harum quam harum.', 'created');





