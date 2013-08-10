Minima 1.4 “Erwin”
---------
There have been little changes in Erwin, but here they are. Enjoy.
---------
==Changelog==


* Theming is no longer done via the database, rather by modifying the frontend viewer (index.php) directly. This does require some trouble upgrading from earlier versions, but not too much. This also means that you will have to examine the changelog before upgrading to a newer version of Minima to see if modifications to your theme are required for it to function properly. Adding custom CSS can easily be done by modifying the app.css stylesheet.


* Fixed bugs not allowing tab changing in AP


* Small changes to the AP interface, tips and changelog URL on dashboard, new $chup value


* Pages can redirect


* All textareas use a minimalistic version of the CKEditor WYSIWYG editor


(AP = Admin panel, $chup is a variable used for update checking)
