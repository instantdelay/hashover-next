<?php

// Copyright (C) 2015-2017 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Display source code
if (basename ($_SERVER['PHP_SELF']) === basename (__FILE__)) {
	if (isset ($_GET['source'])) {
		header ('Content-type: text/plain; charset=UTF-8');
		exit (file_get_contents (basename (__FILE__)));
	}
}

// German text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Kommentar hier eingeben...',
	'reply-form'		=> 'Antwort hier eingeben...',
	'form-tip'		=> 'Akzeptiertes HTML: &lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; wird als HTML dargestellt, URLs werden automatisch zu Links umgewandelt und mit [img]Bild-URL[/img] werden externe Bilder angezeigt.',
	'post-button'		=> 'Kommentar hinzufügen',
	'login'			=> 'Anmelden',
	'login-tip'		=> 'Anmelden (optional)',
	'logout'		=> 'Abmelden',
	'pending-name'		=> 'Wartend...',
	'deleted-name'		=> 'Gelöscht...',
	'error-name'		=> 'Fehler...',
	'pending-note'		=> 'Dieser Kommentar wartet der Zustimmung.',
	'deleted-note'		=> 'Dieser Kommentar wurde gelöscht.',
	'error-note'		=> 'Etwas ist schief gelaufen. Konnte diesen Kommentar nicht abrufen.',
	'options'		=> 'Optionen',
	'cancel'		=> 'Abbrechen',
	'reply-to-comment'	=> 'Auf Kommentar antworten',
	'edit-your-comment'	=> 'Kommentar bearbeiten',
	'optional'		=> 'Optional',
	'required'		=> 'Erforderlich',
	'name'			=> 'Name',
	'name-tip'		=> 'Name (%s)',
	'password'		=> 'Passwort',
	'password-tip'		=> 'Passwort (%s, erlaubt das Bearbeiten oder Löschen dieses Kommentars)',
	'confirm-password'	=> 'Passwort bestätigen',
	'email'			=> 'E-Mail-Adresse',
	'email-tip'		=> 'E-Mail-Adresse (%s, für E-Mail-Benachrichtigungen)',
	'website'		=> 'Webseite',
	'website-tip'		=> 'Webseite (%s)',
	'logged-in'		=> 'Du hast dich erfolgreich angemeldet!',
	'logged-out'		=> 'Du hast dich erfolgreich abgemeldet!',
	'comment-needed'	=> 'Du hast den Kommentar falsch eingegeben. Bitte benutze das Formular unten.',
	'reply-needed'		=> 'Du hast die Antwort falsch eingegeben. Bitte benutze das Formular unten.',
	'field-needed'		=> '"%s" ist erforderlich.',
	'post-fail'		=> 'Ups, du hast nicht die erforderlichen Rechte!',
	'comment-deleted'	=> 'Kommentar gelöscht!',
	'post-reply'		=> 'Antwort absenden',
	'delete'		=> 'Löschen',
	'subscribe'		=> 'Benachrichtige mich über Antworten',
	'subscribe-tip'		=> 'E-Mail Benachrichtigung abonnieren',
	'edit-comment'		=> 'Kommentar bearbeiten',
	'status-approved'	=> 'Genehmigt',
	'status-pending'	=> 'Genehmigung ausstehend',
	'status-deleted'	=> 'Markierte gelöscht',
	'save-edit'		=> 'Speichern',
	'no-email-warning'	=> 'Du wirst bei neuen Kommentaren keine Benachrichtigung erhalten, wenn du keine E-Mail angibst.',
	'invalid-email'		=> 'Die von dir eingegebene E-Mail-Adresse ist ungültig.',
	'delete-comment'	=> 'Möchtest du diesen Kommentar wirklich löschen?',
	'post-comment-on'	=> array ('Kommentar hinzufügen', 'Kommentar hinzufügen zu "%s"'),
	'popular-comments'	=> array ('Beliebtester Kommentar', 'Beliebteste Kommentare'),
	'showing-comments'	=> array ('Anzeigen von %d Kommentar', 'Anzeigen von %d Kommentaren'),
	'count-link'		=> array ('%d Kommentar', '%d Kommentare'),
	'count-replies'		=> array ('%d inklusive Antwort', '%d inklusive Antworten'),
	'sort'			=> 'Sortieren',
	'sort-ascending'	=> 'Aufsteigend',
	'sort-descending'	=> 'Absteigend',
	'sort-by-date'		=> 'Neueste zuerst',
	'sort-by-likes'		=> 'Nach Likes',
	'sort-by-replies'	=> 'Nach Antworten',
	'sort-by-discussion'	=> 'Nach Diskussionen',
	'sort-by-popularity'	=> 'Nach Popularität',
	'sort-by-name'		=> 'Nach Kommentator',
	'sort-threads'		=> 'Threads',
	'thread'		=> 'Als Antwort auf %s',
	'thread-tip'		=> 'Spring zum Anfang des Threads',
	'comments'		=> 'Kommentare',
	'replies'		=> 'Antworten',
	'edit'			=> 'Bearbeiten',
	'reply'			=> 'Antworten',
	'like'			=> array ('Like', 'Likes'),
	'liked'			=> 'Liked',
	'unlike'		=> 'Unlike',
	'like-comment'		=> '\'Like\' diesen Kommentar',
	'liked-comment'		=> '\'Unlike\' diesen Kommentar',
	'dislike'		=> array ('Dislike', 'Dislikes'),
	'disliked'		=> 'Disliked',
	'dislike-comment'	=> '\'Dislike\' diesen Kommentar',
	'disliked-comment'	=> '\'Disliked\' diesen Kommentar',
	'commenter-tip'		=> 'Du wirst nicht per E-Mail benachrichtigt',
	'subscribed-tip'	=> 'wirst per E-Mail benachrichtigt',
	'unsubscribed-tip'	=> 'hat E-Mail-Benachrichtigungen nicht abonniert',
	'first-comment'		=> 'Noch keine Kommentare.',
	'show-other-comments'	=> array ('Zeige %d anderen Kommentar', 'Zeige %d weitere Kommentare'),
	'show-number-comments'	=> array ('Zeige %d Kommentar', 'Zeige %d Kommentare'),
	'date-years'		=> array ('Vor %d Jahr', 'Vor %d Jahren'),
	'date-months'		=> array ('Vor %d Monat', 'Vor %d Monaten'),
	'date-days'		=> array ('Vor %d Tag', 'Vor %d Tagen'),
	'date-today'		=> '%s Heute',
	'untitled'		=> 'Ohne Titel',
	'external-image-tip'	=> 'Klicken um externes Bild anzusehen',
	'loading'		=> 'Laden...',
	'click-to-close'	=> 'Klicken um zu schließen',
	'hashover-comments'	=> 'HashOver Kommentare',
	'rss-feed'		=> 'RSS-Feed',
	'source-code'		=> 'Quellcode'
);
