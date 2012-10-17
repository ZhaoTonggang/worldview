<?php
	$json = array(

		"All"=> array(
			array(
		        "label"=> "Corrected Reflectance (True Color)",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_CorrectedReflectance_TrueColor",
		        "type" => "single", "category" => "baselayers"
			),
			array(
		        "label"=> "Corrected Reflectance (True Color)",
		        "sublabel"=> "Aqua / MODIS",
		        "value"=> "MODIS_Aqua_CorrectedReflectance_TrueColor",
		        "type" => "single", "category" => "baselayers"
			),
			array(
		        "label"=> "Corrected Reflectance (3-6-7)",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_CorrectedReflectance_Bands367",
		        "type" => "single", "category" => "baselayers"
			),
			array(
		        "label"=> "Empty",
		        "sublabel"=> "",
		        "value"=> "NON_EXISTENT_LAYER",
		        "type" => "single", "category" => "baselayers"
			),
			array(
		        "label"=> "Sea Ice",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_Sea_Ice",
		        "type" => "multi", "category" => "overlays"
			),
			array(
		        "label"=> "Sea Ice",
		        "sublabel"=> "Aqua / MODIS",
		        "value"=> "MODIS_Aqua_Sea_Ice",
		        "type" => "multi", "category" => "overlays"
			),
			array(
		        "label"=> "Snow Cover",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_Snow_Cover",
		        "type" => "multi", "category" => "overlays"
			),
			array(
		        "label"=> "Snow Cover",
		        "sublabel"=> "Aqua / MODIS",
		        "value"=> "MODIS_Aqua_Snow_Cover",
		        "type" => "multi", "category" => "overlays"
			),
			array(
		        "label"=> "Brightness Temperature (Band 31-Day)",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_Brightness_Temp_Band31_Day",
		        "type" => "multi", "category" => "overlays"

			),
			array(
		        "label"=> "Brightness Temperature (Band 31-Night)",
		        "sublabel"=> "Terra / MODIS",
		        "value"=> "MODIS_Terra_Brightness_Temp_Band31_Night", 
		        "type" => "multi", "category" => "overlays"

			),
			array(
		        "label"=> "Brightness Temperature (Band 31-Day)",
		        "sublabel"=> "Aqua / MODIS",
		        "value"=> "MODIS_Aqua_Brightness_Temp_Band31_Day",
		        "type" => "multi", "category" => "overlays"

			),
			array(
		        "label"=> "Brightness Temperature (Band 31-Night)",
		        "sublabel"=> "Aqua / MODIS",
		        "value"=> "MODIS_Aqua_Brightness_Temp_Band31_Night",
		        "type" => "multi", "category" => "overlays"

			),
			array(
		        "label"=> "Coastlines",
		        "sublabel"=> "Polarview / Coastlines",
		        "value"=> "polarview:coastS10",
		        "type" => "multi", "category" => "overlays"
		        
			),	
			array(
		        "label"=> "Latitude-Longitude Lines",
		        "sublabel"=> "Polarview / Graticule",
		        "value"=> "polarview:graticule3031_10x30",
		        "type" => "multi", "category" => "overlays"
			)
			
		),
		"palettes" => array(
		"MODIS_Terra_Brightness_Temp_Band31_Day" => array(
		"units" => "K",
		"min" => "190",
		"max" => "340",
		"minValidPaletteIdx" => "0",
		"maxValidPaletteIdx" => "255",
		"palette" => array(
			"0,0,22,0",
			"1,2,27,255",
			"3,4,32,255",
			"4,7,38,255",
			"5,9,43,255",
			"6,11,48,255",
			"8,13,53,255",
			"9,15,58,255",
			"10,18,64,255",
			"11,20,69,255",
			"13,22,74,255",
			"14,24,79,255",
			"15,26,84,255",
			"16,28,89,255",
			"18,31,95,255",
			"19,33,100,255",
			"20,35,105,255",
			"21,36,106,255",
			"23,37,107,255",
			"24,38,108,255",
			"25,39,109,255",
			"27,39,110,255",
			"28,40,111,255",
			"29,41,112,255",
			"31,42,114,255",
			"32,43,115,255",
			"33,44,116,255",
			"34,45,117,255",
			"36,46,118,255",
			"37,46,119,255",
			"38,47,120,255",
			"40,48,121,255",
			"41,49,122,255",
			"42,50,123,255",
			"44,51,124,255",
			"45,51,125,255",
			"46,52,126,255",
			"47,53,127,255",
			"49,54,128,255",
			"50,55,129,255",
			"51,56,130,255",
			"52,56,131,255",
			"54,57,132,255",
			"55,58,133,255",
			"56,59,134,255",
			"57,60,135,255",
			"59,60,136,255",
			"60,61,137,255",
			"61,62,138,255",
			"63,63,138,255",
			"64,63,139,255",
			"66,64,139,255",
			"68,65,140,255",
			"69,65,140,255",
			"71,66,140,255",
			"73,67,141,255",
			"75,68,141,255",
			"76,68,141,255",
			"78,69,142,255",
			"80,70,142,255",
			"81,70,143,255",
			"83,71,143,255",
			"85,72,143,255",
			"86,72,144,255",
			"88,73,144,255",
			"90,74,144,255",
			"92,74,145,255",
			"93,75,145,255",
			"95,76,145,255",
			"97,76,145,255",
			"99,77,146,255",
			"100,78,146,255",
			"102,79,146,255",
			"104,79,146,255",
			"106,80,147,255",
			"107,81,147,255",
			"109,81,147,255",
			"111,82,147,255",
			"113,83,148,255",
			"114,83,148,255",
			"116,84,148,255",
			"118,85,148,255",
			"120,86,149,255",
			"121,86,149,255",
			"123,87,149,255",
			"125,88,149,255",
			"127,89,150,255",
			"129,89,150,255",
			"131,90,150,255",
			"132,91,150,255",
			"134,92,151,255",
			"136,92,151,255",
			"138,93,151,255",
			"140,94,151,255",
			"141,95,152,255",
			"143,95,152,255",
			"145,96,152,255",
			"146,97,152,255",
			"148,97,152,255",
			"149,98,151,255",
			"150,99,151,255",
			"151,99,151,255",
			"153,100,151,255",
			"154,101,150,255",
			"155,102,150,255",
			"156,102,150,255",
			"158,103,150,255",
			"159,104,149,255",
			"160,104,149,255",
			"161,105,149,255",
			"163,106,149,255",
			"164,106,148,255",
			"165,107,148,255",
			"166,108,148,255",
			"167,108,147,255",
			"168,109,147,255",
			"169,110,147,255",
			"170,110,146,255",
			"171,111,146,255",
			"172,112,145,255",
			"173,113,145,255",
			"174,113,145,255",
			"175,114,144,255",
			"176,115,144,255",
			"177,115,144,255",
			"178,116,143,255",
			"179,117,143,255",
			"180,117,142,255",
			"181,118,142,255",
			"182,119,142,255",
			"183,119,141,255",
			"184,120,141,255",
			"185,121,141,255",
			"186,121,140,255",
			"187,122,140,255",
			"188,122,139,255",
			"189,123,139,255",
			"190,124,139,255",
			"191,124,138,255",
			"192,125,138,255",
			"193,126,138,255",
			"194,126,137,255",
			"195,127,137,255",
			"196,127,136,255",
			"197,128,136,255",
			"198,130,137,255",
			"199,131,137,255",
			"200,133,138,255",
			"201,134,139,255",
			"202,136,139,255",
			"203,137,140,255",
			"204,139,140,255",
			"206,141,141,255",
			"207,142,142,255",
			"208,144,142,255",
			"209,145,143,255",
			"210,147,144,255",
			"211,148,144,255",
			"212,150,145,255",
			"213,151,145,255",
			"214,153,146,255",
			"215,155,147,255",
			"216,157,149,255",
			"217,160,150,255",
			"218,162,152,255",
			"219,164,153,255",
			"220,166,155,255",
			"221,168,156,255",
			"222,171,158,255",
			"223,173,159,255",
			"224,175,160,255",
			"225,177,162,255",
			"226,179,163,255",
			"227,181,165,255",
			"228,184,166,255",
			"229,186,168,255",
			"230,188,169,255",
			"231,190,170,255",
			"232,192,172,255",
			"233,194,173,255",
			"234,197,175,255",
			"235,199,176,255",
			"236,201,177,255",
			"237,203,179,255",
			"238,205,180,255",
			"238,207,181,255",
			"239,209,183,255",
			"240,211,184,255",
			"241,214,186,255",
			"242,216,187,255",
			"243,218,188,255",
			"244,220,190,255",
			"245,222,191,255",
			"246,225,193,255",
			"248,227,194,255",
			"249,230,196,255",
			"250,232,198,255",
			"251,235,199,255",
			"253,237,201,255",
			"254,240,202,255",
			"255,242,204,255",
			"255,242,205,255",
			"255,243,206,255",
			"255,243,207,255",
			"255,244,208,255",
			"255,244,209,255",
			"255,245,210,255",
			"255,245,211,255",
			"255,246,212,255",
			"255,246,213,255",
			"255,247,214,255",
			"255,247,215,255",
			"255,248,217,255",
			"255,248,218,255",
			"255,248,219,255",
			"255,249,220,255",
			"255,249,221,255",
			"255,250,222,255",
			"255,250,223,255",
			"255,251,224,255",
			"255,251,225,255",
			"255,252,226,255",
			"255,252,227,255",
			"255,253,228,255",
			"255,253,229,255",
			"255,253,230,255",
			"255,253,231,255",
			"255,253,232,255",
			"255,253,232,255",
			"255,253,233,255",
			"255,253,234,255",
			"255,253,235,255",
			"255,254,236,255",
			"255,254,237,255",
			"255,254,237,255",
			"255,254,238,255",
			"255,254,239,255",
			"255,254,240,255",
			"255,254,241,255",
			"255,254,242,255",
			"255,254,242,255",
			"255,254,243,255",
			"255,254,244,255",
			"255,254,245,255",
			"255,254,246,255",
			"255,254,247,255",
			"255,254,247,255",
			"255,254,248,255",
			"255,255,249,255",
			"255,255,250,255",
			"255,255,251,255",
			"255,255,252,255",
			"255,255,252,255",
			"255,255,253,255",
			"255,255,254,255",
			"0,0,0,0"
		)
	),
	"MODIS_Terra_Brightness_Temp_Band31_Night" => array(
		"units" => "K",
		"min" => "190",
		"max" => "340",
		"minValidPaletteIdx" => "0",
		"maxValidPaletteIdx" => "255",
		"palette" => array(
			"0,0,22,0",
			"1,2,27,255",
			"3,4,32,255",
			"4,7,38,255",
			"5,9,43,255",
			"6,11,48,255",
			"8,13,53,255",
			"9,15,58,255",
			"10,18,64,255",
			"11,20,69,255",
			"13,22,74,255",
			"14,24,79,255",
			"15,26,84,255",
			"16,28,89,255",
			"18,31,95,255",
			"19,33,100,255",
			"20,35,105,255",
			"21,36,106,255",
			"23,37,107,255",
			"24,38,108,255",
			"25,39,109,255",
			"27,39,110,255",
			"28,40,111,255",
			"29,41,112,255",
			"31,42,114,255",
			"32,43,115,255",
			"33,44,116,255",
			"34,45,117,255",
			"36,46,118,255",
			"37,46,119,255",
			"38,47,120,255",
			"40,48,121,255",
			"41,49,122,255",
			"42,50,123,255",
			"44,51,124,255",
			"45,51,125,255",
			"46,52,126,255",
			"47,53,127,255",
			"49,54,128,255",
			"50,55,129,255",
			"51,56,130,255",
			"52,56,131,255",
			"54,57,132,255",
			"55,58,133,255",
			"56,59,134,255",
			"57,60,135,255",
			"59,60,136,255",
			"60,61,137,255",
			"61,62,138,255",
			"63,63,138,255",
			"64,63,139,255",
			"66,64,139,255",
			"68,65,140,255",
			"69,65,140,255",
			"71,66,140,255",
			"73,67,141,255",
			"75,68,141,255",
			"76,68,141,255",
			"78,69,142,255",
			"80,70,142,255",
			"81,70,143,255",
			"83,71,143,255",
			"85,72,143,255",
			"86,72,144,255",
			"88,73,144,255",
			"90,74,144,255",
			"92,74,145,255",
			"93,75,145,255",
			"95,76,145,255",
			"97,76,145,255",
			"99,77,146,255",
			"100,78,146,255",
			"102,79,146,255",
			"104,79,146,255",
			"106,80,147,255",
			"107,81,147,255",
			"109,81,147,255",
			"111,82,147,255",
			"113,83,148,255",
			"114,83,148,255",
			"116,84,148,255",
			"118,85,148,255",
			"120,86,149,255",
			"121,86,149,255",
			"123,87,149,255",
			"125,88,149,255",
			"127,89,150,255",
			"129,89,150,255",
			"131,90,150,255",
			"132,91,150,255",
			"134,92,151,255",
			"136,92,151,255",
			"138,93,151,255",
			"140,94,151,255",
			"141,95,152,255",
			"143,95,152,255",
			"145,96,152,255",
			"146,97,152,255",
			"148,97,152,255",
			"149,98,151,255",
			"150,99,151,255",
			"151,99,151,255",
			"153,100,151,255",
			"154,101,150,255",
			"155,102,150,255",
			"156,102,150,255",
			"158,103,150,255",
			"159,104,149,255",
			"160,104,149,255",
			"161,105,149,255",
			"163,106,149,255",
			"164,106,148,255",
			"165,107,148,255",
			"166,108,148,255",
			"167,108,147,255",
			"168,109,147,255",
			"169,110,147,255",
			"170,110,146,255",
			"171,111,146,255",
			"172,112,145,255",
			"173,113,145,255",
			"174,113,145,255",
			"175,114,144,255",
			"176,115,144,255",
			"177,115,144,255",
			"178,116,143,255",
			"179,117,143,255",
			"180,117,142,255",
			"181,118,142,255",
			"182,119,142,255",
			"183,119,141,255",
			"184,120,141,255",
			"185,121,141,255",
			"186,121,140,255",
			"187,122,140,255",
			"188,122,139,255",
			"189,123,139,255",
			"190,124,139,255",
			"191,124,138,255",
			"192,125,138,255",
			"193,126,138,255",
			"194,126,137,255",
			"195,127,137,255",
			"196,127,136,255",
			"197,128,136,255",
			"198,130,137,255",
			"199,131,137,255",
			"200,133,138,255",
			"201,134,139,255",
			"202,136,139,255",
			"203,137,140,255",
			"204,139,140,255",
			"206,141,141,255",
			"207,142,142,255",
			"208,144,142,255",
			"209,145,143,255",
			"210,147,144,255",
			"211,148,144,255",
			"212,150,145,255",
			"213,151,145,255",
			"214,153,146,255",
			"215,155,147,255",
			"216,157,149,255",
			"217,160,150,255",
			"218,162,152,255",
			"219,164,153,255",
			"220,166,155,255",
			"221,168,156,255",
			"222,171,158,255",
			"223,173,159,255",
			"224,175,160,255",
			"225,177,162,255",
			"226,179,163,255",
			"227,181,165,255",
			"228,184,166,255",
			"229,186,168,255",
			"230,188,169,255",
			"231,190,170,255",
			"232,192,172,255",
			"233,194,173,255",
			"234,197,175,255",
			"235,199,176,255",
			"236,201,177,255",
			"237,203,179,255",
			"238,205,180,255",
			"238,207,181,255",
			"239,209,183,255",
			"240,211,184,255",
			"241,214,186,255",
			"242,216,187,255",
			"243,218,188,255",
			"244,220,190,255",
			"245,222,191,255",
			"246,225,193,255",
			"248,227,194,255",
			"249,230,196,255",
			"250,232,198,255",
			"251,235,199,255",
			"253,237,201,255",
			"254,240,202,255",
			"255,242,204,255",
			"255,242,205,255",
			"255,243,206,255",
			"255,243,207,255",
			"255,244,208,255",
			"255,244,209,255",
			"255,245,210,255",
			"255,245,211,255",
			"255,246,212,255",
			"255,246,213,255",
			"255,247,214,255",
			"255,247,215,255",
			"255,248,217,255",
			"255,248,218,255",
			"255,248,219,255",
			"255,249,220,255",
			"255,249,221,255",
			"255,250,222,255",
			"255,250,223,255",
			"255,251,224,255",
			"255,251,225,255",
			"255,252,226,255",
			"255,252,227,255",
			"255,253,228,255",
			"255,253,229,255",
			"255,253,230,255",
			"255,253,231,255",
			"255,253,232,255",
			"255,253,232,255",
			"255,253,233,255",
			"255,253,234,255",
			"255,253,235,255",
			"255,254,236,255",
			"255,254,237,255",
			"255,254,237,255",
			"255,254,238,255",
			"255,254,239,255",
			"255,254,240,255",
			"255,254,241,255",
			"255,254,242,255",
			"255,254,242,255",
			"255,254,243,255",
			"255,254,244,255",
			"255,254,245,255",
			"255,254,246,255",
			"255,254,247,255",
			"255,254,247,255",
			"255,254,248,255",
			"255,255,249,255",
			"255,255,250,255",
			"255,255,251,255",
			"255,255,252,255",
			"255,255,252,255",
			"255,255,253,255",
			"255,255,254,255",
			"0,0,0,0"
		)
	),
	"MODIS_Aqua_Brightness_Temp_Band31_Day" => array(
		"units" => "K",
		"min" => "190",
		"max" => "340",
		"minValidPaletteIdx" => "0",
		"maxValidPaletteIdx" => "255",
		"palette" => array(
			"0,0,22,0",
			"1,2,27,255",
			"3,4,32,255",
			"4,7,38,255",
			"5,9,43,255",
			"6,11,48,255",
			"8,13,53,255",
			"9,15,58,255",
			"10,18,64,255",
			"11,20,69,255",
			"13,22,74,255",
			"14,24,79,255",
			"15,26,84,255",
			"16,28,89,255",
			"18,31,95,255",
			"19,33,100,255",
			"20,35,105,255",
			"21,36,106,255",
			"23,37,107,255",
			"24,38,108,255",
			"25,39,109,255",
			"27,39,110,255",
			"28,40,111,255",
			"29,41,112,255",
			"31,42,114,255",
			"32,43,115,255",
			"33,44,116,255",
			"34,45,117,255",
			"36,46,118,255",
			"37,46,119,255",
			"38,47,120,255",
			"40,48,121,255",
			"41,49,122,255",
			"42,50,123,255",
			"44,51,124,255",
			"45,51,125,255",
			"46,52,126,255",
			"47,53,127,255",
			"49,54,128,255",
			"50,55,129,255",
			"51,56,130,255",
			"52,56,131,255",
			"54,57,132,255",
			"55,58,133,255",
			"56,59,134,255",
			"57,60,135,255",
			"59,60,136,255",
			"60,61,137,255",
			"61,62,138,255",
			"63,63,138,255",
			"64,63,139,255",
			"66,64,139,255",
			"68,65,140,255",
			"69,65,140,255",
			"71,66,140,255",
			"73,67,141,255",
			"75,68,141,255",
			"76,68,141,255",
			"78,69,142,255",
			"80,70,142,255",
			"81,70,143,255",
			"83,71,143,255",
			"85,72,143,255",
			"86,72,144,255",
			"88,73,144,255",
			"90,74,144,255",
			"92,74,145,255",
			"93,75,145,255",
			"95,76,145,255",
			"97,76,145,255",
			"99,77,146,255",
			"100,78,146,255",
			"102,79,146,255",
			"104,79,146,255",
			"106,80,147,255",
			"107,81,147,255",
			"109,81,147,255",
			"111,82,147,255",
			"113,83,148,255",
			"114,83,148,255",
			"116,84,148,255",
			"118,85,148,255",
			"120,86,149,255",
			"121,86,149,255",
			"123,87,149,255",
			"125,88,149,255",
			"127,89,150,255",
			"129,89,150,255",
			"131,90,150,255",
			"132,91,150,255",
			"134,92,151,255",
			"136,92,151,255",
			"138,93,151,255",
			"140,94,151,255",
			"141,95,152,255",
			"143,95,152,255",
			"145,96,152,255",
			"146,97,152,255",
			"148,97,152,255",
			"149,98,151,255",
			"150,99,151,255",
			"151,99,151,255",
			"153,100,151,255",
			"154,101,150,255",
			"155,102,150,255",
			"156,102,150,255",
			"158,103,150,255",
			"159,104,149,255",
			"160,104,149,255",
			"161,105,149,255",
			"163,106,149,255",
			"164,106,148,255",
			"165,107,148,255",
			"166,108,148,255",
			"167,108,147,255",
			"168,109,147,255",
			"169,110,147,255",
			"170,110,146,255",
			"171,111,146,255",
			"172,112,145,255",
			"173,113,145,255",
			"174,113,145,255",
			"175,114,144,255",
			"176,115,144,255",
			"177,115,144,255",
			"178,116,143,255",
			"179,117,143,255",
			"180,117,142,255",
			"181,118,142,255",
			"182,119,142,255",
			"183,119,141,255",
			"184,120,141,255",
			"185,121,141,255",
			"186,121,140,255",
			"187,122,140,255",
			"188,122,139,255",
			"189,123,139,255",
			"190,124,139,255",
			"191,124,138,255",
			"192,125,138,255",
			"193,126,138,255",
			"194,126,137,255",
			"195,127,137,255",
			"196,127,136,255",
			"197,128,136,255",
			"198,130,137,255",
			"199,131,137,255",
			"200,133,138,255",
			"201,134,139,255",
			"202,136,139,255",
			"203,137,140,255",
			"204,139,140,255",
			"206,141,141,255",
			"207,142,142,255",
			"208,144,142,255",
			"209,145,143,255",
			"210,147,144,255",
			"211,148,144,255",
			"212,150,145,255",
			"213,151,145,255",
			"214,153,146,255",
			"215,155,147,255",
			"216,157,149,255",
			"217,160,150,255",
			"218,162,152,255",
			"219,164,153,255",
			"220,166,155,255",
			"221,168,156,255",
			"222,171,158,255",
			"223,173,159,255",
			"224,175,160,255",
			"225,177,162,255",
			"226,179,163,255",
			"227,181,165,255",
			"228,184,166,255",
			"229,186,168,255",
			"230,188,169,255",
			"231,190,170,255",
			"232,192,172,255",
			"233,194,173,255",
			"234,197,175,255",
			"235,199,176,255",
			"236,201,177,255",
			"237,203,179,255",
			"238,205,180,255",
			"238,207,181,255",
			"239,209,183,255",
			"240,211,184,255",
			"241,214,186,255",
			"242,216,187,255",
			"243,218,188,255",
			"244,220,190,255",
			"245,222,191,255",
			"246,225,193,255",
			"248,227,194,255",
			"249,230,196,255",
			"250,232,198,255",
			"251,235,199,255",
			"253,237,201,255",
			"254,240,202,255",
			"255,242,204,255",
			"255,242,205,255",
			"255,243,206,255",
			"255,243,207,255",
			"255,244,208,255",
			"255,244,209,255",
			"255,245,210,255",
			"255,245,211,255",
			"255,246,212,255",
			"255,246,213,255",
			"255,247,214,255",
			"255,247,215,255",
			"255,248,217,255",
			"255,248,218,255",
			"255,248,219,255",
			"255,249,220,255",
			"255,249,221,255",
			"255,250,222,255",
			"255,250,223,255",
			"255,251,224,255",
			"255,251,225,255",
			"255,252,226,255",
			"255,252,227,255",
			"255,253,228,255",
			"255,253,229,255",
			"255,253,230,255",
			"255,253,231,255",
			"255,253,232,255",
			"255,253,232,255",
			"255,253,233,255",
			"255,253,234,255",
			"255,253,235,255",
			"255,254,236,255",
			"255,254,237,255",
			"255,254,237,255",
			"255,254,238,255",
			"255,254,239,255",
			"255,254,240,255",
			"255,254,241,255",
			"255,254,242,255",
			"255,254,242,255",
			"255,254,243,255",
			"255,254,244,255",
			"255,254,245,255",
			"255,254,246,255",
			"255,254,247,255",
			"255,254,247,255",
			"255,254,248,255",
			"255,255,249,255",
			"255,255,250,255",
			"255,255,251,255",
			"255,255,252,255",
			"255,255,252,255",
			"255,255,253,255",
			"255,255,254,255",
			"0,0,0,0"
		)
	),
	"MODIS_Aqua_Brightness_Temp_Band31_Night" => array(
		"units" => "K",
		"min" => "190",
		"max" => "340",
		"minValidPaletteIdx" => "0",
		"maxValidPaletteIdx" => "255",
		"palette" => array(
			"0,0,22,0",
			"1,2,27,255",
			"3,4,32,255",
			"4,7,38,255",
			"5,9,43,255",
			"6,11,48,255",
			"8,13,53,255",
			"9,15,58,255",
			"10,18,64,255",
			"11,20,69,255",
			"13,22,74,255",
			"14,24,79,255",
			"15,26,84,255",
			"16,28,89,255",
			"18,31,95,255",
			"19,33,100,255",
			"20,35,105,255",
			"21,36,106,255",
			"23,37,107,255",
			"24,38,108,255",
			"25,39,109,255",
			"27,39,110,255",
			"28,40,111,255",
			"29,41,112,255",
			"31,42,114,255",
			"32,43,115,255",
			"33,44,116,255",
			"34,45,117,255",
			"36,46,118,255",
			"37,46,119,255",
			"38,47,120,255",
			"40,48,121,255",
			"41,49,122,255",
			"42,50,123,255",
			"44,51,124,255",
			"45,51,125,255",
			"46,52,126,255",
			"47,53,127,255",
			"49,54,128,255",
			"50,55,129,255",
			"51,56,130,255",
			"52,56,131,255",
			"54,57,132,255",
			"55,58,133,255",
			"56,59,134,255",
			"57,60,135,255",
			"59,60,136,255",
			"60,61,137,255",
			"61,62,138,255",
			"63,63,138,255",
			"64,63,139,255",
			"66,64,139,255",
			"68,65,140,255",
			"69,65,140,255",
			"71,66,140,255",
			"73,67,141,255",
			"75,68,141,255",
			"76,68,141,255",
			"78,69,142,255",
			"80,70,142,255",
			"81,70,143,255",
			"83,71,143,255",
			"85,72,143,255",
			"86,72,144,255",
			"88,73,144,255",
			"90,74,144,255",
			"92,74,145,255",
			"93,75,145,255",
			"95,76,145,255",
			"97,76,145,255",
			"99,77,146,255",
			"100,78,146,255",
			"102,79,146,255",
			"104,79,146,255",
			"106,80,147,255",
			"107,81,147,255",
			"109,81,147,255",
			"111,82,147,255",
			"113,83,148,255",
			"114,83,148,255",
			"116,84,148,255",
			"118,85,148,255",
			"120,86,149,255",
			"121,86,149,255",
			"123,87,149,255",
			"125,88,149,255",
			"127,89,150,255",
			"129,89,150,255",
			"131,90,150,255",
			"132,91,150,255",
			"134,92,151,255",
			"136,92,151,255",
			"138,93,151,255",
			"140,94,151,255",
			"141,95,152,255",
			"143,95,152,255",
			"145,96,152,255",
			"146,97,152,255",
			"148,97,152,255",
			"149,98,151,255",
			"150,99,151,255",
			"151,99,151,255",
			"153,100,151,255",
			"154,101,150,255",
			"155,102,150,255",
			"156,102,150,255",
			"158,103,150,255",
			"159,104,149,255",
			"160,104,149,255",
			"161,105,149,255",
			"163,106,149,255",
			"164,106,148,255",
			"165,107,148,255",
			"166,108,148,255",
			"167,108,147,255",
			"168,109,147,255",
			"169,110,147,255",
			"170,110,146,255",
			"171,111,146,255",
			"172,112,145,255",
			"173,113,145,255",
			"174,113,145,255",
			"175,114,144,255",
			"176,115,144,255",
			"177,115,144,255",
			"178,116,143,255",
			"179,117,143,255",
			"180,117,142,255",
			"181,118,142,255",
			"182,119,142,255",
			"183,119,141,255",
			"184,120,141,255",
			"185,121,141,255",
			"186,121,140,255",
			"187,122,140,255",
			"188,122,139,255",
			"189,123,139,255",
			"190,124,139,255",
			"191,124,138,255",
			"192,125,138,255",
			"193,126,138,255",
			"194,126,137,255",
			"195,127,137,255",
			"196,127,136,255",
			"197,128,136,255",
			"198,130,137,255",
			"199,131,137,255",
			"200,133,138,255",
			"201,134,139,255",
			"202,136,139,255",
			"203,137,140,255",
			"204,139,140,255",
			"206,141,141,255",
			"207,142,142,255",
			"208,144,142,255",
			"209,145,143,255",
			"210,147,144,255",
			"211,148,144,255",
			"212,150,145,255",
			"213,151,145,255",
			"214,153,146,255",
			"215,155,147,255",
			"216,157,149,255",
			"217,160,150,255",
			"218,162,152,255",
			"219,164,153,255",
			"220,166,155,255",
			"221,168,156,255",
			"222,171,158,255",
			"223,173,159,255",
			"224,175,160,255",
			"225,177,162,255",
			"226,179,163,255",
			"227,181,165,255",
			"228,184,166,255",
			"229,186,168,255",
			"230,188,169,255",
			"231,190,170,255",
			"232,192,172,255",
			"233,194,173,255",
			"234,197,175,255",
			"235,199,176,255",
			"236,201,177,255",
			"237,203,179,255",
			"238,205,180,255",
			"238,207,181,255",
			"239,209,183,255",
			"240,211,184,255",
			"241,214,186,255",
			"242,216,187,255",
			"243,218,188,255",
			"244,220,190,255",
			"245,222,191,255",
			"246,225,193,255",
			"248,227,194,255",
			"249,230,196,255",
			"250,232,198,255",
			"251,235,199,255",
			"253,237,201,255",
			"254,240,202,255",
			"255,242,204,255",
			"255,242,205,255",
			"255,243,206,255",
			"255,243,207,255",
			"255,244,208,255",
			"255,244,209,255",
			"255,245,210,255",
			"255,245,211,255",
			"255,246,212,255",
			"255,246,213,255",
			"255,247,214,255",
			"255,247,215,255",
			"255,248,217,255",
			"255,248,218,255",
			"255,248,219,255",
			"255,249,220,255",
			"255,249,221,255",
			"255,250,222,255",
			"255,250,223,255",
			"255,251,224,255",
			"255,251,225,255",
			"255,252,226,255",
			"255,252,227,255",
			"255,253,228,255",
			"255,253,229,255",
			"255,253,230,255",
			"255,253,231,255",
			"255,253,232,255",
			"255,253,232,255",
			"255,253,233,255",
			"255,253,234,255",
			"255,253,235,255",
			"255,254,236,255",
			"255,254,237,255",
			"255,254,237,255",
			"255,254,238,255",
			"255,254,239,255",
			"255,254,240,255",
			"255,254,241,255",
			"255,254,242,255",
			"255,254,242,255",
			"255,254,243,255",
			"255,254,244,255",
			"255,254,245,255",
			"255,254,246,255",
			"255,254,247,255",
			"255,254,247,255",
			"255,254,248,255",
			"255,255,249,255",
			"255,255,250,255",
			"255,255,251,255",
			"255,255,252,255",
			"255,255,252,255",
			"255,255,253,255",
			"255,255,254,255",
			"0,0,0,0"
		)
	),
	"MODIS_Terra_Sea_Ice" => array(
		"units" => "",
		"min" => "0",
		"max" => "1",
		"minValidPaletteIdx" => "200",
		"maxValidPaletteIdx" => "200",
		"palette" => array(
			"218,112,214,255"
		)
	),
	"MODIS_Aqua_Sea_Ice" => array(
		"units" => "",
		"min" => "0",
		"max" => "1",
		"minValidPaletteIdx" => "200",
		"maxValidPaletteIdx" => "200",
		"palette" => array(
			"218,112,214,255"
		)
	),
	"MODIS_Terra_Snow_Cover" => array(
		"units" => "%",
		"min" => "1",
		"max" => "100",
		"minValidPaletteIdx" => "1",
		"maxValidPaletteIdx" => "100",
		"palette" => array(
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255"
		)
	),
	"MODIS_Aqua_Snow_Cover" => array(
		"units" => "%",
		"min" => "1",
		"max" => "100",
		"minValidPaletteIdx" => "1",
		"maxValidPaletteIdx" => "100",
		"palette" => array(
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"30,0,234,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"3,107,244,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"0,221,241,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"3,249,54,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"81,201,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"214,224,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"251,204,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"255,99,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255",
			"207,5,0,255"
		)
	)
		)
	);

	echo json_encode($json);
?>