"use strict";$(document).ready(function(){function t(){return document.documentElement.style.setProperty("--app-height","".concat(window.innerHeight,"px"))}window.addEventListener("resize",t),t(),$(".toggle-mnu").click(function(){return $(this).toggleClass("on"),$(".nav").toggleClass("nav__visibility"),$("body").toggleClass("overflowHiden"),$(window).width()<720&&($(".page-template-page-project .logo_white").toggle(),$(".page-template-page-project .logo_color").toggle()),!1}),$(".fillter a").click(function(t){var e=$(this).attr("data-tab"),a=$('.project_content_tab[data-tab="'+e+'"]');$(".fillter__item-active").removeClass("fillter__item-active"),$(this).addClass("fillter__item-active"),$(".project_content_tab-active").removeClass("project_content_tab-active"),a.addClass("project_content_tab-active"),t.preventDefault()});var e=parseInt($(".slider").attr("data-slider-speed"));new Flickity(".slider",{cellAlign:"right",contain:!0,pageDots:!0,wrapAround:!0,autoPlay:e,draggable:!0,prevNextButtons:!1,pauseAutoPlayOnHover:!0});$(".flickity-page-dots").wrap('<div class="slider-navigation grid" />')});