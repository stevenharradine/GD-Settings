CREATE TABLE IF NOT EXISTS `settings` (
`SETTING_ID` int(9) NOT NULL,
  `key` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

ALTER TABLE `settings`
 ADD PRIMARY KEY (`SETTING_ID`);

ALTER TABLE `settings`
MODIFY `SETTING_ID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;

INSERT INTO `sarah`.`settings` (`key`, `value`) VALUES ('music_fileRoot', '/Music'), ('music_localStartPath', '/etc/SARAH/media'), ('music_webStartPath', 'http://localhost/media'), ('music_flacTranscodePath', '/transcode/flac'), ('music_coverIndex', '0'), ('music_coversPath', '/covers'), ('youtubedownloader_savedir', '/Music/Music%20Videos/'), ('music_audio', 'mp3;flac;aac;m4a'), ('music_video', 'mp4;flv;mpg;mpeg;mkv;ts;avi'), ('music_default_audio', 'mp3'), ('music_default_video', 'mp4');
