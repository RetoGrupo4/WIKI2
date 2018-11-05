// JavaScript Document

         //script aside
         var aside = getUrlParameter('aside');
         if (aside == 0) {
             $('#aside').append('<div include-html="./contenido/aside/asideproxmox.html"></div>');
         }
 
         if (aside == 1) {
             $('#aside').append('<div include-html="./contenido/aside/asidegit.html"></div>');
         }
         if (aside == 2) {
             $('#aside').append('<div include-html="./contenido/aside/asidesolucion.html"></div>');
         }
             //script section
         var section = getUrlParameter('section');
 
         if (section == 0) {
 
             $('#section').append('<div include-html="./contenido/section/UsbBooteable.html"></div>');
         }
         if (section == 1) {
 
             $('#section').append('<div include-html="./contenido/section/proxmox.html"></div>');
         }
         if (section == 2) {
 
             $('#section').append('<div include-html="./contenido/section/ubuntu.html"></div>');
         }
         if (section == 3) {
 
             $('#section').append('<div include-html="./contenido/section/xamp.html"></div>');
         }
         if (section == 4) {
 
             $('#section').append('<div include-html="./contenido/section/git.html"></div>');
         }
 
         if (section == 5) {
 
             $('#section').append('<div include-html="./contenido/section/versiones.html"></div>');
         }
         if (section == 6) {
 
             $('#section').append('<div include-html="./contenido/section/lenguajes.html"></div>');
         }
         if (section == 7) {
 
                $('#section').append('<div include-html="./contenido/section/problemas.html"></div>');
                }
 
         includeHTML();