-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 15 2017 г., 07:59
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mytestdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `filelist`
--

CREATE TABLE `filelist` (
  `id` int(4) NOT NULL,
  `name` varchar(256) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `filelist`
--

INSERT INTO `filelist` (`id`, `name`, `content`) VALUES
(1, '.htaccess', 'test\r\nтесат'),
(2, 'apache2.conf', '123213213'),
(3, 'awesome2.txt', 'dasdas d asd\r\n sad asd\r\n asd asd asd as\r\n'),
(4, 'code.html', ' <div class="menu-modal-holder">\r\n          <div class="select-menu-modal subscription-menu-modal js-menu-content">\r\n            <div class="select-menu-header js-navigation-enable" tabindex="-1">\r\n              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>\r\n              <span class="select-menu-title">Notifications</span>\r\n            </div>\r\n\r\n              <div class="select-menu-list js-navigation-container" role="menu">\r\n\r\n                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">\r\n                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>\r\n                  <div class="select-menu-item-text">\r\n                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />\r\n                    <span class="select-menu-item-heading">Not watching</span>\r\n                    <span class="description">Be notified when participating or @mentioned.</span>\r\n                    <span class="js-select-button-text hidden-select-button-text">\r\n                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>\r\n                      Watch\r\n                    </span>\r\n                  </div>\r\n                </div>'),
(5, 'file1.php', '<?php\r\necho "<h2>PHP is Fun!</h2>";\r\necho "Hello world!<br>";\r\necho "I\'m about to learn PHP!<br>";\r\necho "This ", "string ", "was ", "made ", "with multiple parameters.";\r\n?> '),
(6, 'how.txt', 'dasdas d asd\r\n sad asd\r\n asd asd asd as\r\n'),
(7, 'kek.php', '<?php\r\necho "<h2>PHP is Fun!</h2>";\r\necho "Hello world!<br>";\r\necho "I\'m about to learn PHP!<br>";\r\necho "This ", "string ", "was ", "made ", "with multiple parameters.";\r\n?> '),
(8, 'preved-medved.conf', '123213213'),
(9, 'RUSSIAN_KILLER.html', ' <div class="menu-modal-holder">\r\n          <div class="select-menu-modal subscription-menu-modal js-menu-content">\r\n            <div class="select-menu-header js-navigation-enable" tabindex="-1">\r\n              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>\r\n              <span class="select-menu-title">Notifications</span>\r\n            </div>\r\n\r\n              <div class="select-menu-list js-navigation-container" role="menu">\r\n\r\n                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">\r\n                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>\r\n                  <div class="select-menu-item-text">\r\n                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />\r\n                    <span class="select-menu-item-heading">Not watching</span>\r\n                    <span class="description">Be notified when participating or @mentioned.</span>\r\n                    <span class="js-select-button-text hidden-select-button-text">\r\n                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>\r\n                      Watch\r\n                    </span>\r\n                  </div>\r\n                </div>'),
(10, 'test.html', '        <div class="menu-modal-holder">\r\n          <div class="select-menu-modal subscription-menu-modal js-menu-content">\r\n            <div class="select-menu-header js-navigation-enable" tabindex="-1">\r\n              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>\r\n              <span class="select-menu-title">Notifications</span>\r\n            </div>\r\n\r\n              <div class="select-menu-list js-navigation-container" role="menu">\r\n\r\n                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">\r\n                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>\r\n                  <div class="select-menu-item-text">\r\n                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />\r\n                    <span class="select-menu-item-heading">Not watching</span>\r\n                    <span class="description">Be notified when participating or @mentioned.</span>\r\n                    <span class="js-select-button-text hidden-select-button-text">\r\n                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>\r\n                      Watch\r\n                    </span>\r\n                  </div>\r\n                </div>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `filelist`
--
ALTER TABLE `filelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `filelist`
--
ALTER TABLE `filelist`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
