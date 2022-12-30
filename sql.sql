

CREATE TABLE quizs (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    questions_number int(11) NOT NULL);

CREATE TABLE questions (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    text varchar(255) NOT NULL,
    quiz_id int(11) NOT NULL,
	FOREIGN KEY questions(quiz_id) REFERENCES quizs(id)
);

CREATE TABLE choices (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    text varchar(255) NOT NULL,
    correct varchar(5) NOT NULL,
    question_id int(11) NOT NULL,
	FOREIGN KEY choices(question_id) REFERENCES questions(id)
);