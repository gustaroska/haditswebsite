<?php
	/**
	 * Terbilang English dan Arabic Ordinary Helpers
	 *
	 * @package CodeIgniter
	 */
	
	
	if (!function_exists('english_section')) {
		function english_section($number)
		{
			$locale = 'en_US';
			$nf = new NumberFormatter($locale, NumberFormatter::SPELLOUT);
			$nf->setTextAttribute(NumberFormatter::DEFAULT_RULESET,
				"%spellout-ordinal");
			return ucfirst($nf->format($number));
		}
	}
	
	if (!function_exists('arabic_section')) {
		function arabic_section($number)
		{
			$data = array(
				"الأَوَّلُ",
				"الثَّانِي",
				"الثَّالِثُ",
				"الرَّابِعُ",
				"الخَامِسُ",
				"السَّادِسُ",
				"السَّابِعُ",
				"الثَّامِنُ",
				"التَّاسِعُ",
				"العَاشِرُ",
				"الحَادِيَ عَشَرَ",
				"الثَّانِيَ عَشَرَ",
				"الثَّالِثَ عَشَرَ",
				"الرَّابِعَ عَشَرَ",
				"الخَامِسَ عَشَرَ",
				"السَّادِسَ عَشَرَ",
				"السَّابِعَ عَشَرَ",
				"الثَّامِنَ عَشَرَ",
				"التَّاسِعَ عَشَرَ",
				"العِشْرُونَ",
				"الحَادِي وَالعِشْرُونَ",
				"الثَّانِي وَالعِشْرُونَ",
				"الثَّالِثُ وَالعِشْرُونَ",
				"الرَّابِعُ وَالعِشْرُونَ",
				"الثَّالِثُ وَالعِشْرُونَ",
				"الخَامِسُ وَالعِشْرُونَ",
				"السَّادِسُ وَالعِشْرُونَ",
				"السَّابِعُ وَالعِشْرُونَ",
				"الثَّامِنُ وَالعِشْرُونَ",
				"التَّاسِعُ وَالعِشْرُونَ",
				"الثَّلَاثون");
			$numb = $number - 1;
			return $data[$numb];
		}
	}