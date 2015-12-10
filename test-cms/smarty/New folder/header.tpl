<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='{translation langEn="Junior full stack web developer"},{translation langEn="personal portfolio website"}'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
        {if $showMenu == 'true'} 
            {include file='menu.tpl'}
            {include file='sections/contacts/contacts.tpl'}
        {/if}
        <div class="container">
            {if $showMenu == 'true'}
            <div id="floating" class="floating-contacts">
            </div>
            {/if}
            <div class="main" id="main">
                 <span class="cms">{$cms}</span>
                