/**
 * Импортируем внешние зависимости
 */
import 'jquery';

/**
 * Импортируем всё, что лежит в папке autoload
 */
import "./autoload/**/*";

/**
 * Импортируем пути
 * (класс страницы wordpress, добавляемый к body -> имя пути)
 */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import contacts from './routes/contacts';

/** Добавляем пути в роутер */
const routes = new Router({
  // Будет выполняться на всех страницах
  common,
  // Только на главной странице
  home,
  // Только на странице контактов
  contacts,
});

/**
 * Запустить роутер при загрузке страницы
 */
jQuery(document).ready(() => routes.loadEvents());
