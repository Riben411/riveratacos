<?php
/* Smarty version 3.1.33, created on 2019-01-10 20:19:44
  from 'C:\xampp\htdocs\riveratacos\views\inc\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c379ad0ac2891_24050214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a669f16636c9217f98f6a485bdaf46874c62e22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\inc\\header.html',
      1 => 1547147980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/dependencies.html' => 1,
    'file:views/templates/form_sesion.tpl' => 1,
  ),
),false)) {
function content_5c379ad0ac2891_24050214 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rivera tacos</title>
    <?php $_smarty_tpl->_subTemplateRender('file:views/inc/dependencies.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>

  <body>
    <header class="header">

      <div class="wrapper">
        <p><img src="storage/thumbs/logo.png" alt="logo.png"></p>

        <nav class="nav col-xs-12 col-md-9 col-lg-8">
          <ul>
            <li>
              <a class="col-xs-12" href="index">
                <i class="fas fa-home"></i> Inicio
              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value == 'ventas' || $_smarty_tpl->tpl_vars['nivel']->value == 'root') {?>
              <li>
                <a class="col-xs-12" href="ventas">
                  <i class="fas fa-shopping-bag"></i> Ventas
                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value == 'admin' || $_smarty_tpl->tpl_vars['nivel']->value == 'root') {?>
            <li>
              <a class="col-xs-12" href="administracion">
                <i class="fas fa-chart-line"></i> ADMON
              </a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value == 'almacen' || $_smarty_tpl->tpl_vars['nivel']->value == 'root') {?>
            <li>
              <a class="col-xs-12" href="almacen">
                <i class="fas fa-clipboard-list"></i> Almacen
              </a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value == 'rh' || $_smarty_tpl->tpl_vars['nivel']->value == 'root') {?>
            <li>
              <a class="col-xs-12" href="recursoshumanos">
                <i class="fas fa-users"></i> R.H.
              </a>
            </li>
            <?php }?>
            <?php }?>
          </ul>
        </nav>
      </div>

    </header>
<?php $_smarty_tpl->_subTemplateRender('file:views/templates/form_sesion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
