# Модуль избранного

запросы кидаются на контроллер

- метод добавления - /bitrix/services/main/ajax.php?action=itb:favorite.FavoriteController.add&productID={id}
- метод удаления - /bitrix/services/main/ajax.php?action=itb:favorite.FavoriteController.delete&productID={id}
- метод toggle (добавит или удалит) - /bitrix/services/main/ajax.php?action=itb:favorite.FavoriteController.toggle&productID={id}
- метод получения массива ид товаров избранного - /bitrix/services/main/ajax.php?action=itb:favorite.FavoriteController.get

Так же избранное переносится в момент авторизации пользователю.

в example есть js файл с примером работы с модулем на стороне js без общей структуры