{"filter":false,"title":"routes.php","tooltip":"/message-board/app/Http/routes.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":12,"column":0},"end":{"row":15,"column":61},"action":"insert","lines":["Route::get('messages/{id}', 'MessagesController@show');","Route::post('messages', 'MessagesController@store');","Route::put('messages/{id}', 'MessagesController@update');","Route::delete('messages/{id}', 'MessagesController@destroy');"],"id":2}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":27},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');"],"id":3}],[{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"remove","lines":[";"],"id":4},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"remove","lines":[")"]},{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":["}"]},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["Route::get('messages/{id}', 'MessagesController@show');","Route::post('messages', 'MessagesController@store');","Route::put('messages/{id}', 'MessagesController@update');","Route::delete('messages/{id}', 'MessagesController@destroy');","",""],"id":5}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":50},"action":"insert","lines":["Route::get('/', 'MessagesController@index');","","Route::resource('messages', 'MessagesController');"],"id":6}],[{"start":{"row":14,"column":50},"end":{"row":14,"column":72},"action":"insert","lines":["php artisan route:list"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":50},"end":{"row":14,"column":50},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1523263912353,"hash":"7de75b6a8872f232b1ba99458cd38c43bab99908"}