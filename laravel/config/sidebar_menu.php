<?php 
	
	$sidebarMenu['menu'] = [
		'dashboard' => [
			'title' => 'Dashboard',
			'icon'	=> '<i class="fas fa-tachometer-alt"></i>',
			'route'	=> 'admin',
			'has_submenus'	=> false,
			'submenus'	=> [],
		],

		'category' => [
			'title' => 'Category',
			'icon'	=> '<i class="fa fa-home"></i>',
			'route'	=>  'admin.category',
			'has_submenus'	=> false,
			'submenus'	=> [],
			/*'submenus'	=> [
				'loans' => [
					'title' => 'All Loans',
					'route'	=> 'loans.index',
					'permission' 	=> true,
					'permission_slug' => ['loan_index'],
				]
			],*/
		],

		'master' => [
			'title' => 'Master',
			'icon'	=> '<i class="fa fa-home"></i>',
			'route'	=>  'admin.category',
			'has_submenus'	=> true,
			'submenus'	=> [
				'trainers' => [
					'title' => 'All Trainers',
					'route'	=> 'admin.category'
				],
				'students' => [
					'title' => 'All Students',
					'route'	=> 'admin.category'
				],
				'skills' => [
					'title' => 'Skills',
					'route'	=> 'admin.category'
				]
			],
		]

	];

return $sidebarMenu;

?>