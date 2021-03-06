<?php
$deductible = [null => 'Select...', 1 => '$100', 2 => '$250', 3 => '$500', 4 => '$1,000', 5 => '$2,500', 6 => '$5,000', 7 => '$10,000', 8 => 'None'];
return [
	'debit_credit' => [1 => 'Credit', 2 => 'Debit'],
	'construction' => [1 => 'Frame', 2 => 'Masonry', 3 => 'Fire Resistive'],
	'protection' => [null => 'Select...', 1 => 'Highly Protected', 2 => 'Protected', 3 => 'Semi-Protected', 4 => 'Unprotected'],
	'zone' => [null => 'Select...', 1 => 'Upstate & Sub.', 2 => 'Upstate Cities', 3 => 'New York City'],
	'prior_since' => [null => 'Select...', 1 => 'Prior to 1/60', 2 => 'Since 1/60'],
	'occupied_type' => [1 => 'Owner  Occupied', 2 => 'Lessor  /Tenant Occupied'],
	'policy_type' => [1 => 'Standard Policy', 2 => 'Deluxe Policy'],
	'building_rc_acv' => [null => 'Select...', 1 => 'Replacement Cost', 2 => 'Actual Cash Value', 3 => 'None'], ['prompt' => 'Select...'],
	'business_property_rc_acv' => [null => 'Select...', 1 => 'Replacement Cost', 2 => 'Actual Cash Value', 3 => 'None'], ['prompt' => 'Select...'],
	'yes_no' => [null => 'Select...', 1 => 'Yes', 2 => 'No'],
	'no_yes' => [null => 'Select...', 1 => 'No', 2 => 'Yes'],
	'prop_damage' => [null => 'Select...', 1 => '$100,000', 2 => '$300,000', 3 => '$500,000', 4 => '$1,000,000', 5 => '$2,000,000', 6 => 'None'],
	'agregate' => [null => 'Select...', 1 => '$300,000', 2 => '$500,000', 3 => '$1,000,000', 4 => '$2,000,000', 5 => '$3,000,000', 6 => '$4,000,000', 7 => 'None'],
	'agregate_automobile_coverage' => [null => 'Select...', 1 => '$300,000', 2 => '$500,000', 7 => 'None'],
	'deductible' => $deductible,
	'damages_deductible' => $deductible,
	'time_deductible' => $deductible,
	'food_deductible' => $deductible,
	'refrigerated_property_deductible' => $deductible,
	'storekeepers_burglary_robbery_deductible' => $deductible,
	'deductible_bldg' => $deductible,
	'deductible_bp' => $deductible,
	'time_transmission_lines' => [null => 'Select...', 1 => 'Excluding', 2 => 'Including'],
	'damages_transmission_lines' => [null => 'Select...', 1 => 'Excluding', 2 => 'Including'],
	'cause_of_loss_business_property' => [null => 'Select...', 1 => 'SF-1', 2 => 'SF-3', 3 => 'SF-4', 4 => 'SF-4A'],
	'cause_of_loss_building' => [null => 'Select...', 1 => 'SF-1', 2 => 'SF-2', 3 => 'SF-3'],
	'building_inflation_protection' => [null => 'Select...', 1 => '1%', 2 => '1.5%', 3 => '2%', 4 => '2.5%', 5 => '3%'],

	'building_increment' => [null => 'Select...', 1, 2, 3, 4, 5],
	'bus_prop_increment' => [null => 'Select...', 1, 2, 3, 4, 5],
	'number_of_additional' => [null => 'Select...', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
	'insured_premises_ten' => [null => 'Select...', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	'insured_premises_a_ten' => [0 => 'Select...', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],

	'liquor_liability_restaurant' => [null => 'Select...', 1 => 'Restaurants', 3 => 'Mercantile', 7 => 'Bed & Breakfast'],
	'liquor_liability_limit' => [null => 'Select...', 1 => '$100,000 / $100,000', 2 => '$300,000 / $300,000', 3 => '$500,000 / $500,000'],
	'fire_legal_rate' => 0.2,
	'fire_legal_settlement' => [null => 'Select...', 1 => 'RC', 2 => 'ACV'],

	'barber_shop_liability' => [//todo seems need to be removed   = refactor to use beauty_n_barber[limit]
		null => 'Select...',
		1 => '$100,000 / $200,000',
		2 => '$300,000 / $600,000',
		3 => '$500,000 / $1,000,000',
		4 => '$1,000,000 / $2,000,000',
		5 => '$2,000,000 / $4,000,000'
	],
	'limits_of_liability' => [
		[100000, 200000, 0.49, 25],
		[300000, 600000, 0.63, 32],
		[500000, 1000000, 0.73, 38],
		[1000000, 2000000, 0.90, 47],
		[2000000, 4000000, 1.04, 53],
	],
	'beauty_n_barber' => [
		'limit' => [
			1 => '$100,000 / $200,000',
			2 => '$300,000 / $600,000',
			3 => '$500,000 / $1,000,000',
			4 => '$1,000,000 / $2,000,000',
			5 => '$2,000,000 / $4,000,000',
			6 => ''],
		'beauty_parlor' => [
			'full_time' => [
				1 => 25,
				2 => 29,
				3 => 31,
				4 => 32,
				5 => 33,
				6 => 0],
			'part_time' => [
				1 => 13,
				2 => 14,
				3 => 15,
				4 => 16,
				5 => 17,
				6 => 0
			]
		],
		'barber_shop' => [
			'first' => [
				1 => 14,
				2 => 16,
				3 => 18,
				4 => 20,
				5 => 21,
				6 => 0
			],
			'each_add_l' => [
				1 => 7,
				2 => 8,
				3 => 9,
				4 => 10,
				5 => 11,
				6 => 0
			]
		],
		'manicurists' => [
			1 => 9,
			2 => 11,
			3 => 12,
			4 => 13,
			5 => 14,
			6 => 0
		],
		'minimum_premium' => 25

	],
	'liability_form' => [null => 'Select...', 1 => 'LS-1', 2 => 'LS-5', 3 => 'LS-6', 4 => 'None'],
	'additional_insured' => [null => 'Select...', 1 => 'LS-19', 2 => 'LS-21', 3 => 'LS-22', 4 => 'LS-23', 5 => 'None'],
	'add_increment' => [0 => 'Select...', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
	'storekeepers_burglary_robbery' => [0 => 'Select...', 1 => '$500', 2 => '$1,000', 3 => '$1,500', 4 => '$2,000', 5 => '$3,000', 6 => '$4,000', 7 => '$5,000', 8 => 'None'],
	'automobile_coverage' => [null => 'Select...', 1 => '$100,000', 2 => '$300,000', 3 => '$500,000', 4 => '$1,000,000', 5 => '$2,000,000'],
	'automobile_coverage_a' => [null => 'Select...', 1 => '$100,000', 2 => '$300,000', 3 => '$500,000'],
	'automobile_coverage_a_premiums' => [
		1 => 37,
		2 => 46,
		3 => 54,
		4 => 66,
		5 => 80,
		6 => 0
	],
	'assault_and_batt' => 10,
	'additional_insureds' => ['rate' => 0.025, 'minimum' => 10],
	'standard_minimum' => '250',
	'deluxe_minimum' => '350',
	'deductible_factors' => [
		1 => ["$100", 1.05],
		2 => ["$250", 1],
		3 => ["$500", 0.93],
		4 => ["$1,000", 0.86],
		5 => ["$2,500", 0.79],
		6 => ["$5,000", 0.7],
		7 => ["$10,000", 0.6]
	],
	'aggregate_factors' => [
		1 => [0.990, 0.995, 1.000, 1.000, 1.000, 1.000, 1.000],
		2 => [1.000, 0.988, 0.990, 1.000, 1.000, 1.000, 1.000],
		3 => [1.000, 1.000, 0.988, 0.990, 1.000, 1.000, 1.000],
		4 => [1.000, 1.000, 1.000, 0.988, 0.990, 1.000, 1.000],
		5 => [1.000, 1.000, 1.000, 1.000, 0.988, 0.990, 1.000],
		6 => [1.000, 1.000, 1.000, 1.000, 1.000, 1.000, 1.000]
	],
	'building_inflation' => [
		["1.0%", 0.02],
		["1.5%", 0.03],
		["2.0%", 0.04],
		["2.5%", 0.053],
		["3.0%", 0.066],
		["", 0]
	],
	'exclusionary_endorsement' => [
		'all_hazards' => 0,
		'abestos' => 0,
		'athletic_part' => 0,
		'certain_skin_ls_76' => 0,
		'certain_skin_ls_76a' => 0,
		'discrimination' => 0,
		'employment' => 0,
		'fairs' => 0,
		'laundry' => 0,
		'mod_of_liquor' => 0,
		'operations' => 0,
		'saddle_animals' => 0,
		'snow_ice' => 0,
		'known_loss_damage' => 0
	],
	'extended_pollution' => [
		'credit' => 5
	],
	'factor_credit' => [
		'restaurant' => 0.979,
		'all_others' => 0.986
	],
	'optional_liability_rates' => [
		'111' => [0, 29, 71, 125, 154, 196],
		'112' => [17, 46, 88, 142, 171, 213],
		'113' => [29, 57, 100, 154, 182, 225],
		'114' => [52, 81, 124, 177, 206, 249],
		'115' => [52, 81, 124, 177, 206, 249],
		'122' => [0, 0, 50, 0, 125, 175],
		'123' => [0, 15, 67, 0, 140, 192],
		'124' => [0, 44, 96, 0, 169, 221],
		'125' => [0, 44, 96, 0, 169, 221],
		'211' => [0, 46, 114, 125, 171, 239],
		'212' => [27, 74, 141, 152, 199, 266],
		'213' => [46, 91, 160, 171, 216, 285],
		'214' => [83, 130, 198, 208, 255, 323],
		'215' => [83, 130, 198, 208, 255, 323],
		'222' => [0, 0, 80, 0, 125, 205],
		'223' => [0, 24, 107, 0, 149, 232],
		'224' => [0, 70, 154, 0, 195, 279],
		'225' => [0, 70, 154, 0, 195, 279],
		'311' => [0, 93, 227, 125, 218, 352],
		'312' => [54, 147, 283, 179, 272, 408],
		'313' => [93, 182, 320, 218, 307, 445],
		'314' => [166, 259, 397, 291, 384, 522],
		'315' => [166, 259, 397, 291, 384, 522],
		'322' => [0, 0, 160, 0, 125, 285],
		'323' => [0, 48, 214, 0, 173, 339],
		'324' => [0, 141, 307, 0, 266, 432],
		'325' => [0, 141, 307, 0, 266, 432],
	],
	'receipt_amount' => [
		[0.62, 0.62, 0.31, 0.31, 631, 316, 75],
		[1, 0.77, 0.5, 0.39, 737, 369, 150],
		[1.2, 0.84, 0.6, 0.42, 881, 441, 175],
		[1.4, 0.92, 0.7, 0.46, 1042, 521, 250]
	],
	'pool_liability' => [null, 230, 285, 325, 400, 495],
	'completed_operations_rates' => ['rate_gr_5' => 30, 'others' => 15],
	'water_damage_rates' => [
		'apt' => -2,
		'office_in_apt' => -4,
		'office_in_other' => -7,
		'store_in_apt' => -16,
		'store_in_other' => -32

	],
	'remove_liab' => ['all' => 0.3, 'grp_5' => 0.2],
	'acquired_entities_credit' => 5,
	'automobile_coverage_premium' => [null, 40, 46, 51, 59, 65],
	'designated_premise_credits' => [
		[0.015, 0, 01],
		[0.03, 0.02],
		[0.03, 0.02],
	],
	'contractual_liability_limitation_credit' => 5,
	'designated_premises_credit' => 10,
	'ordinance_and_law_rate' => 1.16,
	'outside_glass' => [
		'curved' => 3,
		'alarm' => 0.2,
		'lettering' => 3
	],
	'outside_glass_linear_feet_rates' => [
		'others' => 3,
		'ny_city' => 8
	],
	'refrigerated_food_rate' => 12,
	'refrigerated_property_rate' => 12,
	'seasonal_var_rate' => [
		'standard' => 0.06,
		'deluxe' => 0
	],
	'seasonal_var_additional_month' => 0.02,
	'seasonal_var_additional_percent' => 0.01,
	'sprink_leak' => 0.15,
	'sprink_leak_rate_increase' => 0.02,
	'terr_mult_sub' => 1.5,
	'terr_mult_nyc' => 2.5,
	'terr_mult_remainder' => 1,
	'burg_of_money' => 5,
	'theft_of_money' => 15,
	'crime_rate_groups' => [
		1 => [60, 60, 71, 71],
		2 => [93, 93, 109, 109],
		3 => [120, 120, 142, 142],
		4 => [145, 145, 171, 171],
		5 => [190, 190, 223, 223],
		6 => [230, 230, 268, 268],
		7 => [265, 265, 308, 308],
		8 => [0, 0, 0, 0]
	],
	'valuable_papers_rate' => 5,
	'insured_premises_rate' => 0.02,
	'insured_premises_a_rate' => 0.02,
	'rate_table' => [
		'11111219' => [0.86, 0.99, 1.29, 0.95, 1.09, 1.42],
		'11111229' => [0.95, 1.09, 1.42, 1.04, 1.20, 1.56],
		'11111111' => [1.14, 1.31, 1.70, 1.25, 1.44, 1.87],
		'11111121' => [1.25, 1.44, 1.87, 1.37, 1.58, 2.06],
		'11111112' => [1.47, 1.69, 2.21, 1.62, 1.86, 2.43],
		'11111122' => [1.62, 1.86, 2.43, 1.78, 2.05, 2.67],
		'11112191' => [1.72, 1.89, 2.16, 1.89, 2.08, 2.37],
		'11112192' => [1.83, 2.02, 2.30, 2.00, 2.20, 2.51],
		'11112193' => [1.91, 2.10, 2.40, 2.75, 3.03, 3.46],
		'11112194' => [2.07, 2.27, 2.60, 3.14, 3.45, 3.93],
		'11112195' => [2.46, 2.71, 3.08, 3.51, 3.86, 4.38],
		'11112291' => [1.24, 1.36, 1.56, 1.36, 1.50, 1.72],
		'11112292' => [1.37, 1.51, 1.72, 1.51, 1.66, 1.89],
		'11112293' => [1.43, 1.57, 1.80, 1.57, 1.73, 1.98],
		'11112294' => [1.55, 1.71, 1.95, 1.71, 1.88, 2.15],
		'11119699' => [0.60, 0.78, 1.06, 0.67, 0.87, 1.19],
		'11119999' => [0.51, 0.66, 0.90, 0.57, 0.74, 1.00],
		'11119819' => [0.43, 0.51, 0.65, 0.56, 0.65, 0.84],
		'11119829' => [0.49, 0.57, 0.73, 0.62, 0.73, 0.93],
		'11119799' => [0.58, 0.64, 0.76, 0.64, 0.70, 0.83],
		'11121219' => [0.95, 1.09, 1.42, 1.04, 1.20, 1.56],
		'11121229' => [1.04, 1.20, 1.56, 1.15, 1.32, 1.72],
		'11121111' => [1.25, 1.44, 1.87, 1.37, 1.58, 2.06],
		'11121121' => [1.37, 1.58, 2.06, 1.51, 1.74, 2.27],
		'11121112' => [1.62, 1.86, 2.43, 1.78, 2.05, 2.67],
		'11121122' => [1.78, 2.05, 2.67, 1.96, 2.25, 2.94],
		'11122191' => [1.89, 2.08, 2.37, 2.08, 2.29, 2.61],
		'11122192' => [2.02, 2.22, 2.53, 2.20, 2.42, 2.76],
		'11122193' => [2.10, 2.31, 2.64, 3.03, 3.33, 3.80],
		'11122194' => [2.27, 2.50, 2.85, 3.45, 3.79, 4.33],
		'11122195' => [2.71, 2.98, 3.38, 3.86, 4.24, 4.82],
		'11122291' => [1.36, 1.50, 1.72, 1.50, 1.65, 1.89],
		'11122292' => [1.51, 1.66, 1.89, 1.66, 1.83, 2.08],
		'11122293' => [1.57, 1.73, 1.98, 1.73, 1.90, 2.18],
		'11122294' => [1.71, 1.88, 2.15, 1.88, 2.06, 2.37],
		'11129699' => [0.66, 0.86, 1.16, 0.74, 0.96, 1.30],
		'11129999' => [0.56, 0.72, 0.99, 0.62, 0.81, 1.10],
		'11129819' => [0.48, 0.56, 0.72, 0.61, 0.72, 0.92],
		'11129829' => [0.54, 0.63, 0.80, 0.68, 0.80, 1.02],
		'11129799' => [0.64, 0.70, 0.83, 0.70, 0.77, 0.92],
		'11211219' => [0.67, 0.77, 1.01, 0.74, 0.85, 1.11],
		'11211229' => [0.74, 0.85, 1.11, 0.81, 0.93, 1.22],
		'11211111' => [0.89, 1.02, 1.33, 0.97, 1.12, 1.46],
		'11211121' => [0.97, 1.12, 1.46, 1.07, 1.23, 1.61],
		'11211112' => [1.15, 1.32, 1.72, 1.26, 1.45, 1.89],
		'11211122' => [1.26, 1.45, 1.89, 1.39, 1.60, 2.08],
		'11212191' => [1.63, 1.80, 2.05, 1.80, 1.98, 2.26],
		'11212192' => [1.74, 1.91, 2.18, 1.90, 2.09, 2.38],
		'11212193' => [1.82, 2.00, 2.28, 2.62, 2.88, 3.28],
		'11212194' => [1.96, 2.16, 2.47, 2.98, 3.28, 3.74],
		'11212195' => [2.34, 2.57, 2.92, 3.33, 3.67, 4.17],
		'11212291' => [1.07, 1.17, 1.34, 1.17, 1.29, 1.48],
		'11212292' => [1.18, 1.30, 1.48, 1.30, 1.43, 1.63],
		'11212293' => [1.23, 1.35, 1.55, 1.35, 1.49, 1.70],
		'11212294' => [1.33, 1.47, 1.68, 1.47, 1.61, 1.85],
		'11219699' => [0.54, 0.70, 0.95, 0.60, 0.78, 1.07],
		'11219999' => [0.46, 0.59, 0.81, 0.51, 0.66, 0.90],
		'11219819' => [0.31, 0.36, 0.46, 0.40, 0.46, 0.60],
		'11219829' => [0.35, 0.40, 0.52, 0.44, 0.52, 0.66],
		'11219799' => [0.46, 0.51, 0.61, 0.51, 0.56, 0.67],
		'11221219' => [0.74, 0.85, 1.11, 0.81, 0.93, 1.22],
		'11221229' => [0.81, 0.93, 1.22, 0.89, 1.03, 1.34],
		'11221111' => [0.97, 1.12, 1.46, 1.07, 1.23, 1.61],
		'11221121' => [1.07, 1.23, 1.61, 1.18, 1.36, 1.77],
		'11221112' => [1.26, 1.45, 1.89, 1.39, 1.60, 2.08],
		'11221122' => [1.39, 1.60, 2.08, 1.53, 1.76, 2.29],
		'11222191' => [1.80, 1.98, 2.26, 1.98, 2.17, 2.48],
		'11222192' => [1.91, 2.11, 2.40, 2.09, 2.30, 2.62],
		'11222193' => [2.00, 2.20, 2.51, 2.88, 3.16, 3.61],
		'11222194' => [2.16, 2.38, 2.71, 3.28, 3.60, 4.11],
		'11222195' => [2.57, 2.83, 3.22, 3.67, 4.03, 4.58],
		'11222291' => [1.17, 1.29, 1.48, 1.29, 1.42, 1.62],
		'11222292' => [1.30, 1.43, 1.63, 1.43, 1.57, 1.79],
		'11222293' => [1.35, 1.49, 1.70, 1.49, 1.63, 1.87],
		'11222294' => [1.47, 1.61, 1.85, 1.61, 1.78, 2.03],
		'11229699' => [0.59, 0.77, 1.05, 0.66, 0.86, 1.17],
		'11229999' => [0.50, 0.65, 0.89, 0.56, 0.73, 0.99],
		'11229819' => [0.34, 0.40, 0.51, 0.44, 0.51, 0.65],
		'11229829' => [0.38, 0.44, 0.57, 0.48, 0.57, 0.73],
		'11229799' => [0.51, 0.56, 0.67, 0.56, 0.62, 0.73],
		'12111219' => [0.94, 1.09, 1.42, 1.04, 1.19, 1.56],
		'12111229' => [1.04, 1.19, 1.56, 1.14, 1.31, 1.71],
		'12111111' => [1.16, 1.34, 1.74, 1.28, 1.47, 1.92],
		'12111121' => [1.28, 1.47, 1.92, 1.41, 1.62, 2.11],
		'12111112' => [1.51, 1.73, 2.26, 1.66, 1.91, 2.49],
		'12111122' => [1.66, 1.91, 2.49, 1.82, 2.10, 2.73],
		'12112191' => [1.67, 1.84, 2.10, 1.84, 2.02, 2.31],
		'12112192' => [1.78, 1.96, 2.23, 1.94, 2.14, 2.44],
		'12112193' => [1.86, 2.04, 2.33, 2.68, 2.94, 3.36],
		'12112194' => [2.01, 2.21, 2.52, 3.05, 3.35, 3.82],
		'12112195' => [2.39, 2.63, 2.99, 3.41, 3.75, 4.26],
		'12112291' => [1.29, 1.42, 1.63, 1.42, 1.57, 1.79],
		'12112292' => [1.43, 1.58, 1.80, 1.58, 1.73, 1.98],
		'12112293' => [1.49, 1.64, 1.88, 1.64, 1.80, 2.07],
		'12112294' => [1.62, 1.78, 2.04, 1.78, 1.96, 2.25],
		'12119699' => [0.75, 0.97, 1.32, 0.84, 1.09, 1.48],
		'12119999' => [0.63, 0.82, 1.12, 0.71, 0.92, 1.25],
		'12119819' => [0.45, 0.53, 0.68, 0.58, 0.68, 0.88],
		'12119829' => [0.51, 0.59, 0.76, 0.65, 0.76, 0.97],
		'12119799' => [0.60, 0.66, 0.79, 0.66, 0.73, 0.87],
		'12121219' => [1.04, 1.19, 1.56, 1.14, 1.31, 1.71],
		'12121229' => [1.14, 1.31, 1.71, 1.26, 1.44, 1.88],
		'12121111' => [1.28, 1.47, 1.92, 1.41, 1.62, 2.11],
		'12121121' => [1.41, 1.62, 2.11, 1.55, 1.78, 2.32],
		'12121112' => [1.66, 1.91, 2.49, 1.82, 2.10, 2.73],
		'12121122' => [1.82, 2.10, 2.73, 2.01, 2.31, 3.01],
		'12122191' => [1.84, 2.02, 2.31, 2.02, 2.22, 2.54],
		'12122192' => [1.96, 2.15, 2.46, 2.14, 2.35, 2.68],
		'12122193' => [2.04, 2.25, 2.56, 2.94, 3.24, 3.69],
		'12122194' => [2.21, 2.43, 2.78, 3.35, 3.69, 4.21],
		'12122195' => [2.63, 2.90, 3.29, 3.75, 4.13, 4.69],
		'12122291' => [1.42, 1.57, 1.79, 1.57, 1.72, 1.97],
		'12122292' => [1.58, 1.73, 1.98, 1.73, 1.91, 2.17],
		'12122293' => [1.64, 1.80, 2.07, 1.80, 1.99, 2.27],
		'12122294' => [1.78, 1.96, 2.25, 1.96, 2.16, 2.47],
		'12129699' => [0.82, 1.07, 1.46, 0.92, 1.20, 1.63],
		'12129999' => [0.70, 0.90, 1.23, 0.78, 1.01, 1.38],
		'12129819' => [0.50, 0.58, 0.75, 0.64, 0.75, 0.96],
		'12129829' => [0.56, 0.65, 0.84, 0.71, 0.83, 1.07],
		'12129799' => [0.66, 0.73, 0.87, 0.73, 0.80, 0.96],
		'12211219' => [0.74, 0.85, 1.10, 0.81, 0.93, 1.21],
		'12211229' => [0.81, 0.93, 1.21, 0.89, 1.02, 1.34],
		'12211111' => [0.91, 1.04, 1.36, 1.00, 1.15, 1.49],
		'12211121' => [1.00, 1.15, 1.49, 1.10, 1.26, 1.64],
		'12211112' => [1.18, 1.35, 1.76, 1.29, 1.49, 1.94],
		'12211122' => [1.29, 1.49, 1.94, 1.42, 1.64, 2.13],
		'12212191' => [1.59, 1.75, 1.99, 1.75, 1.92, 2.19],
		'12212192' => [1.69, 1.86, 2.12, 1.84, 2.03, 2.31],
		'12212193' => [1.76, 1.94, 2.21, 2.54, 2.80, 3.19],
		'12212194' => [1.91, 2.10, 2.40, 2.90, 3.18, 3.63],
		'12212195' => [2.27, 2.50, 2.84, 3.24, 3.56, 4.05],
		'12212291' => [1.11, 1.22, 1.40, 1.22, 1.35, 1.54],
		'12212292' => [1.23, 1.35, 1.55, 1.35, 1.49, 1.70],
		'12212293' => [1.28, 1.41, 1.62, 1.41, 1.55, 1.78],
		'12212294' => [1.39, 1.53, 1.76, 1.53, 1.69, 1.93],
		'12219699' => [0.67, 0.87, 1.19, 0.75, 0.98, 1.33],
		'12219999' => [0.57, 0.74, 1.01, 0.64, 0.83, 1.13],
		'12219819' => [0.32, 0.38, 0.48, 0.41, 0.48, 0.62],
		'12219829' => [0.36, 0.42, 0.54, 0.46, 0.54, 0.69],
		'12219799' => [0.48, 0.53, 0.63, 0.53, 0.58, 0.70],
		'12221219' => [0.81, 0.93, 1.21, 0.89, 1.02, 1.34],
		'12221229' => [0.89, 1.02, 1.34, 0.98, 1.13, 1.47],
		'12221111' => [1.00, 1.15, 1.49, 1.10, 1.26, 1.64],
		'12221121' => [1.10, 1.26, 1.64, 1.21, 1.39, 1.81],
		'12221112' => [1.29, 1.49, 1.94, 1.42, 1.64, 2.13],
		'12221122' => [1.42, 1.64, 2.13, 1.56, 1.80, 2.35],
		'12222191' => [1.75, 1.92, 2.19, 1.92, 2.11, 2.41],
		'12222192' => [1.86, 2.05, 2.34, 2.03, 2.23, 2.55],
		'12222193' => [1.94, 2.13, 2.44, 2.80, 3.08, 3.51],
		'12222194' => [2.10, 2.31, 2.64, 3.18, 3.50, 4.00],
		'12222195' => [2.50, 2.75, 3.13, 3.56, 3.92, 4.45],
		'12222291' => [1.22, 1.35, 1.54, 1.35, 1.48, 1.70],
		'12222292' => [1.35, 1.49, 1.70, 1.49, 1.64, 1.87],
		'12222293' => [1.41, 1.55, 1.78, 1.55, 1.71, 1.96],
		'12222294' => [1.53, 1.69, 1.93, 1.69, 1.85, 2.12],
		'12229699' => [0.74, 0.96, 1.31, 0.83, 1.08, 1.47],
		'12229999' => [0.63, 0.81, 1.11, 0.70, 0.91, 1.24],
		'12229819' => [0.35, 0.41, 0.53, 0.46, 0.53, 0.68],
		'12229829' => [0.40, 0.46, 0.60, 0.51, 0.59, 0.76],
		'12229799' => [0.53, 0.58, 0.70, 0.58, 0.64, 0.76],
		'13111219' => [1.57, 0.00, 0.00, 1.73, 0.00, 0.00],
		'13111229' => [1.73, 0.00, 0.00, 1.90, 0.00, 0.00],
		'13111111' => [2.07, 0.00, 0.00, 2.26, 0.00, 0.00],
		'13111121' => [2.26, 0.00, 0.00, 2.47, 0.00, 0.00],
		'13111112' => [2.68, 0.00, 0.00, 2.95, 0.00, 0.00],
		'13111122' => [2.95, 0.00, 0.00, 3.24, 0.00, 0.00],
		'13112191' => [3.29, 0.00, 0.00, 3.61, 0.00, 0.00],
		'13112192' => [3.48, 0.00, 0.00, 3.79, 0.00, 0.00],
		'13112193' => [3.64, 0.00, 0.00, 5.25, 0.00, 0.00],
		'13112194' => [3.94, 0.00, 0.00, 5.98, 0.00, 0.00],
		'13112195' => [4.69, 0.00, 0.00, 6.68, 0.00, 0.00],
		'13112291' => [2.61, 0.00, 0.00, 2.87, 0.00, 0.00],
		'13112292' => [2.86, 0.00, 0.00, 3.15, 0.00, 0.00],
		'13112293' => [3.00, 0.00, 0.00, 3.30, 0.00, 0.00],
		'13112294' => [3.27, 0.00, 0.00, 3.60, 0.00, 0.00],
		'13119699' => [0.78, 0.00, 0.00, 0.87, 0.00, 0.00],
		'13119999' => [0.66, 0.00, 0.00, 0.74, 0.00, 0.00],
		'13119819' => [0.57, 0.00, 0.00, 0.73, 0.00, 0.00],
		'13119829' => [0.62, 0.00, 0.00, 0.79, 0.00, 0.00],
		'13119799' => [0.83, 0.00, 0.00, 0.91, 0.00, 0.00],
		'13121219' => [1.73, 0.00, 0.00, 1.90, 0.00, 0.00],
		'13121229' => [1.90, 0.00, 0.00, 2.09, 0.00, 0.00],
		'13121111' => [2.28, 0.00, 0.00, 2.49, 0.00, 0.00],
		'13121121' => [2.49, 0.00, 0.00, 2.71, 0.00, 0.00],
		'13121112' => [2.95, 0.00, 0.00, 3.24, 0.00, 0.00],
		'13121122' => [3.24, 0.00, 0.00, 3.57, 0.00, 0.00],
		'13122191' => [3.61, 0.00, 0.00, 3.98, 0.00, 0.00],
		'13122192' => [3.83, 0.00, 0.00, 4.17, 0.00, 0.00],
		'13122193' => [4.01, 0.00, 0.00, 5.77, 0.00, 0.00],
		'13122194' => [4.34, 0.00, 0.00, 6.58, 0.00, 0.00],
		'13122195' => [5.16, 0.00, 0.00, 7.35, 0.00, 0.00],
		'13122291' => [2.87, 0.00, 0.00, 3.16, 0.00, 0.00],
		'13122292' => [3.15, 0.00, 0.00, 3.47, 0.00, 0.00],
		'13122293' => [3.30, 0.00, 0.00, 3.63, 0.00, 0.00],
		'13122294' => [3.60, 0.00, 0.00, 3.96, 0.00, 0.00],
		'13129699' => [0.85, 0.00, 0.00, 0.96, 0.00, 0.00],
		'13129999' => [0.73, 0.00, 0.00, 0.82, 0.00, 0.00],
		'13129819' => [0.62, 0.00, 0.00, 0.80, 0.00, 0.00],
		'13129829' => [0.68, 0.00, 0.00, 0.87, 0.00, 0.00],
		'13129799' => [0.91, 0.00, 0.00, 1.00, 0.00, 0.00],
		'13211219' => [0.53, 0.00, 0.00, 0.58, 0.00, 0.00],
		'13211229' => [0.58, 0.00, 0.00, 0.64, 0.00, 0.00],
		'13211111' => [0.70, 0.00, 0.00, 0.76, 0.00, 0.00],
		'13211121' => [0.76, 0.00, 0.00, 0.83, 0.00, 0.00],
		'13211112' => [0.90, 0.00, 0.00, 0.99, 0.00, 0.00],
		'13211122' => [0.99, 0.00, 0.00, 1.09, 0.00, 0.00],
		'13212191' => [2.56, 0.00, 0.00, 2.82, 0.00, 0.00],
		'13212192' => [2.75, 0.00, 0.00, 3.00, 0.00, 0.00],
		'13212193' => [2.88, 0.00, 0.00, 4.15, 0.00, 0.00],
		'13212194' => [3.12, 0.00, 0.00, 4.72, 0.00, 0.00],
		'13212195' => [3.71, 0.00, 0.00, 5.28, 0.00, 0.00],
		'13212291' => [1.59, 0.00, 0.00, 1.75, 0.00, 0.00],
		'13212292' => [1.75, 0.00, 0.00, 1.92, 0.00, 0.00],
		'13212293' => [1.83, 0.00, 0.00, 2.01, 0.00, 0.00],
		'13212294' => [2.00, 0.00, 0.00, 2.20, 0.00, 0.00],
		'13219699' => [0.55, 0.00, 0.00, 0.62, 0.00, 0.00],
		'13219999' => [0.47, 0.00, 0.00, 0.53, 0.00, 0.00],
		'13219819' => [0.27, 0.00, 0.00, 0.34, 0.00, 0.00],
		'13219829' => [0.29, 0.00, 0.00, 0.37, 0.00, 0.00],
		'13219799' => [0.66, 0.00, 0.00, 0.73, 0.00, 0.00],
		'13221219' => [0.58, 0.00, 0.00, 0.64, 0.00, 0.00],
		'13221229' => [0.64, 0.00, 0.00, 0.70, 0.00, 0.00],
		'13221111' => [0.76, 0.00, 0.00, 0.83, 0.00, 0.00],
		'13221121' => [0.83, 0.00, 0.00, 0.91, 0.00, 0.00],
		'13221112' => [0.99, 0.00, 0.00, 1.09, 0.00, 0.00],
		'13221122' => [1.09, 0.00, 0.00, 1.20, 0.00, 0.00],
		'13222191' => [2.82, 0.00, 0.00, 3.10, 0.00, 0.00],
		'13222192' => [3.02, 0.00, 0.00, 3.30, 0.00, 0.00],
		'13222193' => [3.16, 0.00, 0.00, 4.56, 0.00, 0.00],
		'13222194' => [3.43, 0.00, 0.00, 5.20, 0.00, 0.00],
		'13222195' => [4.08, 0.00, 0.00, 5.81, 0.00, 0.00],
		'13222291' => [1.75, 0.00, 0.00, 1.93, 0.00, 0.00],
		'13222292' => [1.92, 0.00, 0.00, 2.11, 0.00, 0.00],
		'13222293' => [2.01, 0.00, 0.00, 2.22, 0.00, 0.00],
		'13222294' => [2.20, 0.00, 0.00, 2.42, 0.00, 0.00],
		'13229699' => [0.61, 0.00, 0.00, 0.68, 0.00, 0.00],
		'13229999' => [0.52, 0.00, 0.00, 0.58, 0.00, 0.00],
		'13229819' => [0.29, 0.00, 0.00, 0.38, 0.00, 0.00],
		'13229829' => [0.32, 0.00, 0.00, 0.41, 0.00, 0.00],
		'13229799' => [0.73, 0.00, 0.00, 0.80, 0.00, 0.00],
		'21111219' => [0.82, 0.94, 1.23, 0.90, 1.03, 1.35],
		'21111229' => [0.90, 1.03, 1.35, 0.99, 1.14, 1.48],
		'21111111' => [1.08, 1.24, 1.62, 1.19, 1.36, 1.78],
		'21111121' => [1.19, 1.36, 1.78, 1.30, 1.50, 1.96],
		'21111112' => [1.40, 1.61, 2.10, 1.54, 1.77, 2.31],
		'21111122' => [1.54, 1.77, 2.31, 1.69, 1.95, 2.54],
		'21112191' => [1.63, 1.80, 2.05, 1.80, 1.98, 2.26],
		'21112192' => [1.74, 1.91, 2.18, 1.90, 2.09, 2.38],
		'21112193' => [1.82, 2.00, 2.28, 2.62, 2.88, 3.28],
		'21112194' => [1.96, 2.16, 2.47, 2.98, 3.28, 3.74],
		'21112195' => [2.34, 2.57, 2.92, 3.33, 3.67, 4.17],
		'21112291' => [1.18, 1.29, 1.48, 1.29, 1.42, 1.63],
		'21112292' => [1.30, 1.43, 1.64, 1.43, 1.58, 1.80],
		'21112293' => [1.36, 1.49, 1.71, 1.49, 1.64, 1.88],
		'21112294' => [1.47, 1.62, 1.86, 1.62, 1.78, 2.04],
		'21119699' => [0.57, 0.74, 1.01, 0.64, 0.83, 1.13],
		'21119999' => [0.48, 0.62, 0.85, 0.54, 0.70, 0.95],
		'21119819' => [0.41, 0.48, 0.62, 0.53, 0.62, 0.80],
		'21119829' => [0.46, 0.54, 0.69, 0.59, 0.69, 0.88],
		'21119799' => [0.55, 0.60, 0.72, 0.60, 0.66, 0.79],
		'21121219' => [0.90, 1.03, 1.35, 0.99, 1.14, 1.48],
		'21121229' => [0.99, 1.14, 1.48, 1.09, 1.25, 1.63],
		'21121111' => [1.19, 1.36, 1.78, 1.30, 1.50, 1.96],
		'21121121' => [1.30, 1.50, 1.96, 1.44, 1.65, 2.15],
		'21121112' => [1.54, 1.77, 2.31, 1.69, 1.95, 2.54],
		'21121122' => [1.69, 1.95, 2.54, 1.86, 2.14, 2.79],
		'21122191' => [1.80, 1.98, 2.26, 1.98, 2.17, 2.48],
		'21122192' => [1.91, 2.11, 2.40, 2.09, 2.30, 2.62],
		'21122193' => [2.00, 2.20, 2.51, 2.88, 3.16, 3.61],
		'21122194' => [2.16, 2.38, 2.71, 3.28, 3.60, 4.11],
		'21122195' => [2.57, 2.83, 3.22, 3.67, 4.03, 4.58],
		'21122291' => [1.29, 1.42, 1.63, 1.42, 1.57, 1.79],
		'21122292' => [1.43, 1.58, 1.80, 1.58, 1.73, 1.98],
		'21122293' => [1.49, 1.64, 1.88, 1.64, 1.81, 2.07],
		'21122294' => [1.62, 1.78, 2.04, 1.78, 1.96, 2.25],
		'21129699' => [0.62, 0.81, 1.11, 0.70, 0.91, 1.24],
		'21129999' => [0.53, 0.69, 0.94, 0.59, 0.77, 1.05],
		'21129819' => [0.45, 0.53, 0.68, 0.58, 0.68, 0.88],
		'21129829' => [0.51, 0.59, 0.76, 0.65, 0.76, 0.97],
		'21129799' => [0.60, 0.66, 0.79, 0.66, 0.73, 0.87],
		'21211219' => [0.64, 0.73, 0.96, 0.70, 0.81, 1.05],
		'21211229' => [0.70, 0.81, 1.05, 0.77, 0.89, 1.16],
		'21211111' => [0.84, 0.97, 1.26, 0.93, 1.06, 1.39],
		'21211121' => [0.93, 1.06, 1.39, 1.02, 1.17, 1.53],
		'21211112' => [1.09, 1.25, 1.64, 1.20, 1.38, 1.80],
		'21211122' => [1.20, 1.38, 1.80, 1.32, 1.52, 1.98],
		'21212191' => [1.55, 1.71, 1.95, 1.71, 1.88, 2.14],
		'21212192' => [1.65, 1.82, 2.07, 1.80, 1.98, 2.26],
		'21212193' => [1.72, 1.90, 2.16, 2.48, 2.73, 3.12],
		'21212194' => [1.87, 2.05, 2.34, 2.83, 3.11, 3.55],
		'21212195' => [2.22, 2.44, 2.78, 3.17, 3.48, 3.96],
		'21212291' => [1.01, 1.11, 1.28, 1.11, 1.22, 1.40],
		'21212292' => [1.12, 1.23, 1.41, 1.23, 1.36, 1.55],
		'21212293' => [1.17, 1.28, 1.47, 1.28, 1.41, 1.62],
		'21212294' => [1.27, 1.39, 1.60, 1.39, 1.53, 1.76],
		'21219699' => [0.51, 0.66, 0.90, 0.57, 0.74, 1.01],
		'21219999' => [0.43, 0.56, 0.77, 0.48, 0.63, 0.86],
		'21219819' => [0.29, 0.34, 0.44, 0.38, 0.44, 0.57],
		'21219829' => [0.33, 0.38, 0.49, 0.42, 0.49, 0.63],
		'21219799' => [0.44, 0.48, 0.58, 0.48, 0.53, 0.63],
		'21221219' => [0.70, 0.81, 1.05, 0.77, 0.89, 1.16],
		'21221229' => [0.77, 0.89, 1.16, 0.85, 0.98, 1.27],
		'21221111' => [0.93, 1.06, 1.39, 1.02, 1.17, 1.53],
		'21221121' => [1.02, 1.17, 1.53, 1.12, 1.29, 1.68],
		'21221112' => [1.20, 1.38, 1.80, 1.32, 1.52, 1.98],
		'21221122' => [1.32, 1.52, 1.98, 1.45, 1.67, 2.18],
		'21222191' => [1.71, 1.88, 2.14, 1.88, 2.07, 2.36],
		'21222192' => [1.82, 2.00, 2.28, 1.98, 2.18, 2.49],
		'21222193' => [1.90, 2.09, 2.38, 2.73, 3.01, 3.43],
		'21222194' => [2.05, 2.26, 2.58, 3.11, 3.42, 3.91],
		'21222195' => [2.44, 2.69, 3.05, 3.48, 3.83, 4.35],
		'21222291' => [1.11, 1.22, 1.40, 1.22, 1.35, 1.54],
		'21222292' => [1.23, 1.36, 1.55, 1.36, 1.49, 1.70],
		'21222293' => [1.28, 1.41, 1.62, 1.41, 1.55, 1.78],
		'21222294' => [1.39, 1.53, 1.76, 1.53, 1.69, 1.93],
		'21229699' => [0.56, 0.73, 1.00, 0.63, 0.82, 1.11],
		'21229999' => [0.48, 0.62, 0.84, 0.53, 0.69, 0.94],
		'21229819' => [0.32, 0.38, 0.48, 0.41, 0.49, 0.62],
		'21229829' => [0.36, 0.42, 0.54, 0.46, 0.54, 0.69],
		'21229799' => [0.48, 0.53, 0.63, 0.53, 0.58, 0.70],
		'22111219' => [0.90, 1.03, 1.34, 0.99, 1.13, 1.48],
		'22111229' => [0.99, 1.13, 1.48, 1.08, 1.25, 1.63],
		'22111111' => [1.10, 1.27, 1.66, 1.21, 1.40, 1.82],
		'22111121' => [1.21, 1.40, 1.82, 1.34, 1.54, 2.00],
		'22111112' => [1.43, 1.65, 2.15, 1.57, 1.81, 2.36],
		'22111122' => [1.57, 1.81, 2.36, 1.73, 1.99, 2.60],
		'22112191' => [1.59, 1.75, 1.99, 1.75, 1.92, 2.19],
		'22112192' => [1.69, 1.86, 2.12, 1.84, 2.03, 2.31],
		'22112193' => [1.76, 1.94, 2.21, 2.54, 2.80, 3.19],
		'22112194' => [1.91, 2.10, 2.40, 2.90, 3.18, 3.63],
		'22112195' => [2.27, 2.50, 2.84, 3.24, 3.56, 4.05],
		'22112291' => [1.23, 1.35, 1.55, 1.35, 1.49, 1.70],
		'22112292' => [1.36, 1.50, 1.71, 1.50, 1.65, 1.88],
		'22112293' => [1.42, 1.56, 1.79, 1.56, 1.71, 1.96],
		'22112294' => [1.54, 1.69, 1.94, 1.69, 1.86, 2.13],
		'22119699' => [0.71, 0.92, 1.26, 0.80, 1.03, 1.41],
		'22119999' => [0.60, 0.78, 1.06, 0.67, 0.87, 1.19],
		'22119819' => [0.43, 0.50, 0.65, 0.55, 0.65, 0.83],
		'22119829' => [0.48, 0.56, 0.72, 0.62, 0.72, 0.92],
		'22119799' => [0.57, 0.63, 0.75, 0.63, 0.69, 0.83],
		'22121219' => [0.99, 1.13, 1.48, 1.08, 1.25, 1.63],
		'22121229' => [1.08, 1.25, 1.63, 1.19, 1.37, 1.79],
		'22121111' => [1.21, 1.40, 1.82, 1.34, 1.54, 2.00],
		'22121121' => [1.34, 1.54, 2.00, 1.47, 1.69, 2.20],
		'22121112' => [1.57, 1.81, 2.36, 1.73, 1.99, 2.60],
		'22121122' => [1.73, 1.99, 2.60, 1.90, 2.19, 2.86],
		'22122191' => [1.75, 1.92, 2.19, 1.92, 2.11, 2.41],
		'22122192' => [1.86, 2.05, 2.34, 2.03, 2.23, 2.55],
		'22122193' => [1.94, 2.13, 2.44, 2.80, 3.08, 3.51],
		'22122194' => [2.10, 2.31, 2.64, 3.18, 3.50, 4.00],
		'22122195' => [2.50, 2.75, 3.13, 3.56, 3.92, 4.45],
		'22122291' => [1.35, 1.49, 1.70, 1.49, 1.64, 1.87],
		'22122292' => [1.50, 1.65, 1.88, 1.65, 1.81, 2.07],
		'22122293' => [1.56, 1.71, 1.96, 1.71, 1.89, 2.16],
		'22122294' => [1.69, 1.86, 2.13, 1.86, 2.05, 2.35],
		'22129699' => [0.78, 1.02, 1.38, 0.87, 1.14, 1.55],
		'22129999' => [0.66, 0.86, 1.17, 0.74, 0.96, 1.31],
		'22129819' => [0.47, 0.55, 0.71, 0.61, 0.71, 0.91],
		'22129829' => [0.53, 0.62, 0.80, 0.68, 0.79, 1.02],
		'22129799' => [0.63, 0.69, 0.83, 0.69, 0.76, 0.91],
		'22211219' => [0.70, 0.80, 1.05, 0.77, 0.88, 1.15],
		'22211229' => [0.77, 0.88, 1.15, 0.85, 0.97, 1.27],
		'22211111' => [0.86, 0.99, 1.29, 0.95, 1.09, 1.42],
		'22211121' => [0.95, 1.09, 1.42, 1.04, 1.20, 1.56],
		'22211112' => [1.12, 1.28, 1.67, 1.23, 1.41, 1.84],
		'22211122' => [1.23, 1.41, 1.84, 1.35, 1.55, 2.03],
		'22212191' => [1.51, 1.66, 1.89, 1.66, 1.83, 2.08],
		'22212192' => [1.61, 1.77, 2.02, 1.75, 1.93, 2.20],
		'22212193' => [1.68, 1.84, 2.10, 2.42, 2.66, 3.03],
		'22212194' => [1.81, 2.00, 2.28, 2.75, 3.03, 3.45],
		'22212195' => [2.16, 2.38, 2.70, 3.08, 3.38, 3.85],
		'22212291' => [1.06, 1.16, 1.33, 1.16, 1.28, 1.47],
		'22212292' => [1.17, 1.29, 1.47, 1.29, 1.42, 1.62],
		'22212293' => [1.22, 1.34, 1.54, 1.34, 1.47, 1.69],
		'22212294' => [1.32, 1.46, 1.67, 1.46, 1.60, 1.83],
		'22219699' => [0.64, 0.83, 1.13, 0.72, 0.93, 1.27],
		'22219999' => [0.54, 0.70, 0.96, 0.61, 0.79, 1.07],
		'22219819' => [0.31, 0.36, 0.46, 0.39, 0.46, 0.59],
		'22219829' => [0.34, 0.40, 0.51, 0.44, 0.51, 0.66],
		'22219799' => [0.46, 0.50, 0.60, 0.50, 0.55, 0.66],
		'22221219' => [0.77, 0.88, 1.15, 0.85, 0.97, 1.27],
		'22221229' => [0.85, 0.97, 1.27, 0.93, 1.07, 1.40],
		'22221111' => [0.95, 1.09, 1.42, 1.04, 1.20, 1.56],
		'22221121' => [1.04, 1.20, 1.56, 1.15, 1.32, 1.72],
		'22221112' => [1.23, 1.41, 1.84, 1.35, 1.55, 2.03],
		'22221122' => [1.35, 1.55, 2.03, 1.49, 1.71, 2.23],
		'22222191' => [1.66, 1.83, 2.08, 1.83, 2.01, 2.29],
		'22222192' => [1.77, 1.94, 2.22, 1.93, 2.12, 2.42],
		'22222193' => [1.84, 2.03, 2.31, 2.66, 2.92, 3.33],
		'22222194' => [2.00, 2.20, 2.50, 3.03, 3.33, 3.80],
		'22222195' => [2.38, 2.61, 2.97, 3.38, 3.72, 4.23],
		'22222291' => [1.16, 1.28, 1.47, 1.28, 1.41, 1.61],
		'22222292' => [1.29, 1.42, 1.62, 1.42, 1.56, 1.78],
		'22222293' => [1.34, 1.47, 1.69, 1.47, 1.62, 1.86],
		'22222294' => [1.46, 1.60, 1.83, 1.60, 1.76, 2.02],
		'22229699' => [0.70, 0.91, 1.24, 0.79, 1.02, 1.39],
		'22229999' => [0.59, 0.77, 1.05, 0.67, 0.87, 1.18],
		'22229819' => [0.34, 0.39, 0.51, 0.43, 0.51, 0.65],
		'22229829' => [0.38, 0.44, 0.57, 0.48, 0.56, 0.72],
		'22229799' => [0.50, 0.55, 0.66, 0.55, 0.61, 0.73],
		'23111219' => [1.49, 0.00, 0.00, 1.64, 0.00, 0.00],
		'23111229' => [1.64, 0.00, 0.00, 1.81, 0.00, 0.00],
		'23111111' => [1.97, 0.00, 0.00, 2.15, 0.00, 0.00],
		'23111121' => [2.15, 0.00, 0.00, 2.34, 0.00, 0.00],
		'23111112' => [2.55, 0.00, 0.00, 2.80, 0.00, 0.00],
		'23111122' => [2.80, 0.00, 0.00, 3.08, 0.00, 0.00],
		'23112191' => [3.12, 0.00, 0.00, 3.43, 0.00, 0.00],
		'23112192' => [3.31, 0.00, 0.00, 3.60, 0.00, 0.00],
		'23112193' => [3.46, 0.00, 0.00, 4.99, 0.00, 0.00],
		'23112194' => [3.75, 0.00, 0.00, 5.68, 0.00, 0.00],
		'23112195' => [4.46, 0.00, 0.00, 6.35, 0.00, 0.00],
		'23112291' => [2.48, 0.00, 0.00, 2.73, 0.00, 0.00],
		'23112292' => [2.72, 0.00, 0.00, 2.99, 0.00, 0.00],
		'23112293' => [2.85, 0.00, 0.00, 3.14, 0.00, 0.00],
		'23112294' => [3.11, 0.00, 0.00, 3.42, 0.00, 0.00],
		'23119699' => [0.74, 0.00, 0.00, 0.82, 0.00, 0.00],
		'23119999' => [0.63, 0.00, 0.00, 0.71, 0.00, 0.00],
		'23119819' => [0.54, 0.00, 0.00, 0.69, 0.00, 0.00],
		'23119829' => [0.59, 0.00, 0.00, 0.75, 0.00, 0.00],
		'23119799' => [0.79, 0.00, 0.00, 0.87, 0.00, 0.00],
		'23121219' => [1.64, 0.00, 0.00, 1.81, 0.00, 0.00],
		'23121229' => [1.81, 0.00, 0.00, 1.99, 0.00, 0.00],
		'23121111' => [2.17, 0.00, 0.00, 2.36, 0.00, 0.00],
		'23121121' => [2.36, 0.00, 0.00, 2.58, 0.00, 0.00],
		'23121112' => [2.80, 0.00, 0.00, 3.08, 0.00, 0.00],
		'23121122' => [3.08, 0.00, 0.00, 3.39, 0.00, 0.00],
		'23122191' => [3.43, 0.00, 0.00, 3.78, 0.00, 0.00],
		'23122192' => [3.64, 0.00, 0.00, 3.96, 0.00, 0.00],
		'23122193' => [3.81, 0.00, 0.00, 5.48, 0.00, 0.00],
		'23122194' => [4.12, 0.00, 0.00, 6.25, 0.00, 0.00],
		'23122195' => [4.90, 0.00, 0.00, 6.98, 0.00, 0.00],
		'23122291' => [2.73, 0.00, 0.00, 3.00, 0.00, 0.00],
		'23122292' => [2.99, 0.00, 0.00, 3.29, 0.00, 0.00],
		'23122293' => [3.14, 0.00, 0.00, 3.45, 0.00, 0.00],
		'23122294' => [3.42, 0.00, 0.00, 3.76, 0.00, 0.00],
		'23129699' => [0.81, 0.00, 0.00, 0.91, 0.00, 0.00],
		'23129999' => [0.69, 0.00, 0.00, 0.78, 0.00, 0.00],
		'23129819' => [0.59, 0.00, 0.00, 0.76, 0.00, 0.00],
		'23129829' => [0.64, 0.00, 0.00, 0.82, 0.00, 0.00],
		'23129799' => [0.87, 0.00, 0.00, 0.95, 0.00, 0.00],
		'23211219' => [0.50, 0.00, 0.00, 0.55, 0.00, 0.00],
		'23211229' => [0.55, 0.00, 0.00, 0.61, 0.00, 0.00],
		'23211111' => [0.66, 0.00, 0.00, 0.72, 0.00, 0.00],
		'23211121' => [0.72, 0.00, 0.00, 0.78, 0.00, 0.00],
		'23211112' => [0.85, 0.00, 0.00, 0.94, 0.00, 0.00],
		'23211122' => [0.94, 0.00, 0.00, 1.03, 0.00, 0.00],
		'23212191' => [2.43, 0.00, 0.00, 2.68, 0.00, 0.00],
		'23212192' => [2.61, 0.00, 0.00, 2.85, 0.00, 0.00],
		'23212193' => [2.73, 0.00, 0.00, 3.94, 0.00, 0.00],
		'23212194' => [2.96, 0.00, 0.00, 4.49, 0.00, 0.00],
		'23212195' => [3.52, 0.00, 0.00, 5.02, 0.00, 0.00],
		'23212291' => [1.51, 0.00, 0.00, 1.66, 0.00, 0.00],
		'23212292' => [1.66, 0.00, 0.00, 1.83, 0.00, 0.00],
		'23212293' => [1.74, 0.00, 0.00, 1.91, 0.00, 0.00],
		'23212294' => [1.90, 0.00, 0.00, 2.09, 0.00, 0.00],
		'23219699' => [0.52, 0.00, 0.00, 0.59, 0.00, 0.00],
		'23219999' => [0.45, 0.00, 0.00, 0.50, 0.00, 0.00],
		'23219819' => [0.25, 0.00, 0.00, 0.33, 0.00, 0.00],
		'23219829' => [0.28, 0.00, 0.00, 0.35, 0.00, 0.00],
		'23219799' => [0.63, 0.00, 0.00, 0.69, 0.00, 0.00],
		'23221219' => [0.55, 0.00, 0.00, 0.61, 0.00, 0.00],
		'23221229' => [0.61, 0.00, 0.00, 0.67, 0.00, 0.00],
		'23221111' => [0.73, 0.00, 0.00, 0.79, 0.00, 0.00],
		'23221121' => [0.79, 0.00, 0.00, 0.86, 0.00, 0.00],
		'23221112' => [0.94, 0.00, 0.00, 1.03, 0.00, 0.00],
		'23221122' => [1.03, 0.00, 0.00, 1.14, 0.00, 0.00],
		'23222191' => [2.68, 0.00, 0.00, 2.95, 0.00, 0.00],
		'23222192' => [2.87, 0.00, 0.00, 3.13, 0.00, 0.00],
		'23222193' => [3.01, 0.00, 0.00, 4.33, 0.00, 0.00],
		'23222194' => [3.26, 0.00, 0.00, 4.94, 0.00, 0.00],
		'23222195' => [3.87, 0.00, 0.00, 5.52, 0.00, 0.00],
		'23222291' => [1.66, 0.00, 0.00, 1.83, 0.00, 0.00],
		'23222292' => [1.83, 0.00, 0.00, 2.01, 0.00, 0.00],
		'23222293' => [1.91, 0.00, 0.00, 2.10, 0.00, 0.00],
		'23222294' => [2.09, 0.00, 0.00, 2.30, 0.00, 0.00],
		'23229699' => [0.58, 0.00, 0.00, 0.64, 0.00, 0.00],
		'23229999' => [0.49, 0.00, 0.00, 0.55, 0.00, 0.00],
		'23229819' => [0.28, 0.00, 0.00, 0.36, 0.00, 0.00],
		'23229829' => [0.30, 0.00, 0.00, 0.39, 0.00, 0.00],
		'23229799' => [0.69, 0.00, 0.00, 0.76, 0.00, 0.00]
	],
	'zone_factors' => [
		'61' => [1.15, 0.95, 0.95, 1, 1.25, 1.25, 1],
		'62' => [1.15, 0.95, 0.95, 1, 1.25, 1.25, 1],
		'71' => [1, 1, 1, 1, 1, 1, 1],
		'72' => [1, 1, 1, 1, 1, 1, 1],
		'91' => [1.15, 0.95, 0.95, 1, 1.25, 1.25, 1],
		'92' => [1.15, 0.95, 0.95, 1, 1.25, 1.25, 1],
		'11' => [1.05, 0.95, 0.95, 1, 1, 1.05, 1],
		'12' => [1, 0.8, 0.8, 0.95, 1, 1, 1],
		'81' => [1, 1, 1, 1, 1.05, 1, 1],
		'82' => [1, 1, 1, 1, 1.05, 1, 1],
		'21' => [0.95, 1, 1, 0.95, 1.05, 1.05, 1],
		'22' => [0.95, 1, 1, 0.95, 1, 1, 1]
	],
	'burglary_robbery_cov' => [
		[5.000, 9.88, 16.34, 22.8, 34.2],
		[15.000, 3.23, 5.32, 7.41, 10.07],
		[25.000, 0.95, 1.71, 2.28, 3.42],
		['Over', 0.24, 0.43, 0.57, 0.86]
	],
	'bop_burg_terr_mult' => [
		[1, 'Suburban', 1.85],
		[2, 'NYC', 1.85],
		[1, 'Remainder', 1],
	],
	'building_cause_loss' => [
		['SF-1', 0, 0],
		['SF-2', 0.05, -0.01],
		['SF-3', 0.06, 0],
	],
	'business_property_cause_loss' => [
		['SF-1', 0, 0],
		['SF-2', 0.05, -0.05],
		['SF-4', 0, 0],
		['SF-4A', 0.075, -0.04],
	],
	'b_bp_together' => [
		'zone_1_2' => 0.85,
		'zone_3' => 0.7
	],
	'b_bp_credits' => [
		'sole' => 0.9,
		'merc' => 1.1
	],
	'special_conditions' => [
		'external_fire_alarm_system' => 3,
		'approved_watchman_service' => 4,
		'central_station_reporting' => 8,
		'smoke_detectors' => 2,
		'burglary_alarm_only' => 3,
		'fire_resistive' => 25,
		'sprinklered' => 35,
		'fire_resistive_sprinklered' => 50,
		'hood_and_duct' => 10,
		'above' => 15,
		'all_above' => 20,
		'metal_building' => 15,
		'storage_buildings' => 15,
		'conforming_code_specifications' => 7,
	],
	'option_coverage_rates' => [
		'accounts' => 5,
		'additional' => 3
	],
	'computer_coverage_rate' => 4.5,
	'cooking_protection_equip' => 30,
	'demolition_debris' => [
		'aggr1' => 0.12,
		'aggr2' => 1,
		'aggr3' => 0.05
	],
	'building_zone' => [
		1 => [0.022, 0.017, 0.034],
		2 => [0.094, 0.051, 0.204],
		3 => [0.068, 0.051, 0.111]
	],
	'bp_zone' => [
		1 => [0.051, 0.043, 0.073],
		2 => [0.115, 0.085, 0.188],
		3 => [0.074, 0.062, 0.104]
	],
	'earthquake_factor' => 0.9,
	'employee_dishonesty' => 3,
	'equipment_breakdown' => [
		'50.000 and Less' => 25,
		'$50.001 to $100.000' => 30,
		'$100.001 to $150.000' => 35,
		'$150.001 to $200.000' => 40,
		'$200.001 to $250.000' => 50,
		'$250.001 to $300.000' => 65,
		'$300.001 to $400.000' => 100,
		'$400.001 to $500.000' => 150,
		'Greater than $500.000' => 175
	],
	'exterior_signs_rate' => 2,
	'loss_off_income_month_factor' => 0.01,
	'loss_off_income_factor' => -0.02,
	'loss_off_income_a_factor' => -0.02,
	'loss_off_income_a_number_factor' => 0.005,
	'money_security_rate' => [
		'upstate' => 5,
		'upstate_cities' => 5,
		'suburban' => 10,
		'ny_city' => 10
	],
	'direct_damage_rate' => [
		'including' => 0.15,
		'excluding' => 0.08
	],
	'time_element_rate' => [
		'including' => 0.2,
		'excluding' => 0.1
	],
	'max_sum_for_irpm' => 3499,
	'liability' => [
		0 => 'Select...',
		1 => '100,000/200,000',
		2 => '300,000/600,000',
		3 => '500,000/1,000,000',
		4 => '1,000,000/2,000,000',
		5 => '2,000,000/4,000,000'
	],
	'ls46_coverage' => [
		'liability' => [
			0 => 'Select...',
			1 => '100,000/200,000',
			2 => '300,000/600,000',
			3 => '500,000/1,000,000',
			4 => '1,000,000/2,000,000',
			5 => '2,000,000/4,000,000'
		],
		'rates' => [
			[0.57, 0.45, 40],
			[0.67, 0.53, 46],
			[0.74, 0.59, 51],
			[0.85, 0.68, 59],
			[0.94, 0.75, 66]
		]
	],
	'ls47_liability' => [
		null,
		'100,000/200,000' => [0.49, 25],
		'300,000/600,000' => [0.63, 32],
		'500,000/1,000,000' => [0.73, 38],
		'1,000,000/2,000,000' => [0.9, 47],
		'2,000,000/4,000,000' => [1.04, 53],
	],
	'additional_insured_ls22a_flat' => 50,
	'clergypersons' =>
		[
			'40' => '100,000/200,000',
			'46' => '300,000/600,000',
			'51' => '500,000/1,000,000',
			'59' => '1,000,000/2,000,000',
			'65' => '2,000,000/4,000,000',
		],
	'special_events' => [
		'days' => [
			0 => 'Select...',
			1 => '1-3 days',
			2 => '4-7 days',
			3 => '> than 7 days'
		],
		'values' =>
			[
				[
					[53, 82, 97],
					[66, 104, 122],
					[76, 119, 141],
					[92, 144, 170],
					[111, 174, 205]
				],
				[
					[74, 115, 136],
					[93, 145, 171],
					[107, 167, 197],
					[129, 202, 238],
					[156, 244, 288]
				],
				[
					[105, 165, 194],
					[132, 207, 244],
					[152, 239, 281],
					[184, 288, 339],
					[222, 349, 410]
				]
			]
	]
];
