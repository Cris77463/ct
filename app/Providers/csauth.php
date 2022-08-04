

 providers => [
       'users' => [
           'driver' => 'eloquent',
           'model' => App\User::class,
       ],

       'csauth' => [
           'driver' => 'customcs',
           'model' => App\User::class,
       ]

       // 'users' => [
       //     'driver' => 'database',
       //     'table' => 'users',
       // ],
   ], 