-- uoc_qms.sql
-- Best-effort database schema reconstructed from the PHP source in this archive. I dont remember. lol
-- Target: MySQL (works best with InnoDB). This is an *archive* project, so adjust as needed.

SET NAMES utf8;
SET time_zone = '+00:00';

CREATE DATABASE IF NOT EXISTS `uoc_qms`
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE `uoc_qms`;

-- ----------------------------
-- Users (students)
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_name`    VARCHAR(100) NOT NULL,
  `user_pass`    VARCHAR(255) NOT NULL,
  `user_email`   VARCHAR(150) DEFAULT NULL,
  `user_contact` VARCHAR(50)  DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Admins / lecturers
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id`      INT NOT NULL,
  `admin_name`    VARCHAR(100) NOT NULL,
  `admin_contact` VARCHAR(50)  DEFAULT NULL,
  `admin_pass`    VARCHAR(255) NOT NULL,
  `admin_email`   VARCHAR(150) DEFAULT NULL,
  `admin_added`   VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `uq_admin_name` (`admin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Quizzes (meta)
-- ----------------------------
DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `quiz_id`   INT NOT NULL AUTO_INCREMENT,
  `quiz_name` VARCHAR(255) NOT NULL,
  `quiz_by`   VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`quiz_id`),
  UNIQUE KEY `uq_quiz_name` (`quiz_name`),
  KEY `idx_quiz_by` (`quiz_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Quiz questions (MCQ)
-- q_id is the question number within a quiz (1..N).
-- ----------------------------
DROP TABLE IF EXISTS `info_quiz`;
CREATE TABLE `info_quiz` (
  `id`            INT NOT NULL AUTO_INCREMENT,
  `quiz_id`       INT NOT NULL,
  `q_id`          INT NOT NULL,
  `q_txt`         TEXT NOT NULL,
  `q_pic`         VARCHAR(255) DEFAULT NULL,
  `q_mcq1_ans`    VARCHAR(255) DEFAULT NULL,
  `q_mcq2_ans`    VARCHAR(255) DEFAULT NULL,
  `q_mcq3_ans`    VARCHAR(255) DEFAULT NULL,
  `q_mcq4_ans`    VARCHAR(255) DEFAULT NULL,
  `q_mcq5_ans`    VARCHAR(255) DEFAULT NULL,
  `q_mcq_ans_num` TINYINT UNSIGNED DEFAULT NULL, -- correct answer number (1..5)
  `q_hint`        TEXT DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_quiz_qid` (`quiz_id`, `q_id`),
  KEY `idx_info_quiz_quiz` (`quiz_id`),
  CONSTRAINT `fk_info_quiz_quiz`
    FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`)
    ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Marks (student results per quiz)
-- stu_id in the PHP is the user's username.
-- ----------------------------
DROP TABLE IF EXISTS `marks`;
CREATE TABLE `marks` (
  `id`        INT NOT NULL AUTO_INCREMENT,
  `quiz_id`   INT NOT NULL,
  `stu_id`    VARCHAR(100) NOT NULL,
  `marks`     INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_marks_quiz` (`quiz_id`),
  KEY `idx_marks_student` (`stu_id`),
  CONSTRAINT `fk_marks_quiz`
    FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_marks_student`
    FOREIGN KEY (`stu_id`) REFERENCES `user_info` (`user_name`)
    ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Optional (example):
-- INSERT INTO admin(admin_id, admin_name, admin_contact, admin_pass, admin_email, admin_added)
-- VALUES (1, 'admin', '0000000000', 'password', 'admin@example.com', 'system');
