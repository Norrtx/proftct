NavBar::begin([
      
      'brandUrl' => Yii::$app->homeUrl,
      // 'homeUrl'=>'site/personal',
      'options' => [
          'class' => 'navbar-inverse navbar-fixed-top',
      ],
  ]);
  $menuItems = [
      ['label' => 'Personal', 'url' => ['/site/personal']],
      ['label' => 'Education', 'url' => ['/site/education']],
      ['label' => 'Skill', 'url' => ['/site/skill']],
    
      ['label' => 'Personal', 'url' => ['/personal/index']],
      ['label' => 'Education', 'url' => ['/education/index']],
      ['label' => 'Skill', 'url' => ['/skill/index']],
    
  ];