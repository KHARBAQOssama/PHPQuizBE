

CREATE TABLE quizs (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    questions_number int(11) NOT NULL);


CREATE TABLE questions (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    question varchar(255) NOT NULL,
    choice1 varchar(255) NOT NULL,
    choice2 varchar(255) NOT NULL,
    choice3 varchar(255) NOT NULL,
    choice4 varchar(255) NOT NULL,
    answer int(2) NOT NULL,
    quiz_id int(11) NOT NULL,
	FOREIGN KEY questions(quiz_id) REFERENCES quizs(id)
);


insert into quizs (id, name, questions_number	) values (1, 'Robust tertiary solution', 10);
insert into quizs (id, name, questions_number	) values (2, 'Ameliorated 6th generation internet solution', 10);
insert into quizs (id, name, questions_number	) values (3, 'Sharable composite task-force', 10);
insert into quizs (id, name, questions_number	) values (4, 'Integrated local installation', 10);

insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (1, 'Organic bottom-line migration', 'Face to face holistic moratorium', 'User-centric interactive archive', 'Innovative cohesive superstructure', 'Programmable foreground definition', 2, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (2, 'Multi-tiered background core', 'Advanced leading edge database', 'Vision-oriented attitude-oriented projection', 'Universal 3rd generation orchestration', 'User-centric eco-centric adapter', 1, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (3, 'De-engineered national neural-net', 'Synergized composite pricing structure', 'Compatible well-modulated firmware', 'Realigned 24 hour policy', 'Universal foreground artificial intelligence', 3, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (4, 'Right-sized system-worthy capability', 'Persistent optimal utilisation', 'Horizontal directional access', 'Realigned methodical algorithm', 'Vision-oriented eco-centric contingency', 4, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (5, 'Exclusive dynamic frame', 'Fully-configurable grid-enabled instruction set', 'Multi-lateral hybrid core', 'Triple-buffered fresh-thinking instruction set', 'Decentralized didactic open system', 4, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (6, 'Decentralized 24 hour paradigm', 'Ameliorated scalable throughput', 'Monitored holistic definition', 'Enhanced secondary customer loyalty', 'Polarised clear-thinking interface', 3, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (7, 'Programmable optimizing productivity', 'Re-engineered scalable infrastructure', 'Sharable coherent policy', 'Persevering object-oriented capacity', 'Managed clear-thinking firmware', 2, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (8, 'Self-enabling discrete initiative', 'Intuitive 24/7 approach', 'Configurable cohesive interface', 'Customer-focused clear-thinking policy', 'Persistent client-driven help-desk', 3, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (9, 'Profound tertiary model', 'Organic client-driven service-desk', 'Pre-emptive encompassing model', 'Enhanced logistical secured line', 'Triple-buffered regional paradigm', 3, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (10, 'Configurable 6th generation hub', 'Organic explicit contingency', 'Visionary optimizing collaboration', 'Devolved empowering throughput', 'Customizable interactive framework', 1, 1);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (11, 'Versatile client-driven extranet', 'Profound tertiary access', 'Cross-group modular customer loyalty', 'Centralized non-volatile functionalities', 'Mandatory encompassing support', 1, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (12, 'Business-focused even-keeled flexibility', 'Vision-oriented heuristic paradigm', 'Diverse holistic migration', 'Configurable actuating standardization', 'Multi-tiered secondary info-mediaries', 2, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (13, 'Face to face responsive website', 'Intuitive bifurcated software', 'Persevering executive database', 'Expanded static contingency', 'Multi-layered encompassing projection', 3, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (14, 'Enhanced impactful policy', 'Re-conquestionualized high-level encoding', 'Intuitive global service-desk', 'Configurable full-range open architecture', 'Down-sized analyzing project', 4, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (15, 'Persevering zero defect support', 'Operative homogeneous intranet', 'User-centric bottom-line adapter', 'Implemented zero administration contingency', 'Assimilated bandwidth-monitored parallelism', 4, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (16, 'Polarised incremental secured line', 'Upgradable global knowledge user', 'Implemented mission-critical function', 'Business-focused interactive toolset', 'Ameliorated conquestion-sensitive intranet', 3, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (17, 'Horizontal stable monitoring', 'Team-oriented even-keeled collaboration', 'Implemented grid-enabled protocol', 'Reactive bottom-line productivity', 'Streamlined clear-thinking attitude', 1, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (18, 'Multi-tiered uniform challenge', 'Triple-buffered zero defect software', 'Advanced eco-centric archive', 'Organized dedicated system engine', 'Seamless conquestion-sensitive flexibility', 3, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (19, 'Vision-oriented conquestionually-based initiative', 'Streamlined user-facing data-warehouse', 'Versatile 24 hour framework', 'Cloned mission-critical emulation', 'Assimilated dynamic utilisation', 1, 2);
insert into questions (id, question, choice1, choice2, choice3, choice4, answer, quiz_id) values (20, 'Open-architected composite concept', 'Optimized web-enabled Graphic Interface', 'Quality-focused discrete interface', 'Synchronised object-oriented circuit', 'Re-conquestionualized bifurcated attitude', 2, 2);




INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `quiz_id`) VALUES (NULL, 'Which of the following type of variables are named and indexed collections of other values?', 'Strings', 'Arrays', 'Objects', 'Resources', '2', '1');
INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `quiz_id`) VALUES (NULL, 'Which of the following magic constant of PHP returns current line number of the file?', '_LINE_', '_FILE_', '_FUNCTION_', '_CLASS_', '1', '1');
INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `quiz_id`) VALUES (NULL, 'Which of the following array represents an array with strings as index?', 'Numeric Array', ' Associative Array', 'Multidimentional Array', 'None of the above.', '2', '1');
INSERT INTO `questions` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `quiz_id`) VALUES (NULL, 'Which of the following function is used to redirect a page?', 'redirect()', ' header()', 'reflect()','None of the above.', '2', '1');