<?
namespace Itb\Favorite;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type\DateTime;

Loc::loadMessages(__FILE__);

class FavoriteTable extends Entity\DataManager
{
    /**
     * Возвращает название таблицы
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'itb_favorite_products';
    }

    /**
     * Возвращает структуру ОРМ-сущности
     *
     * @return array
     */
    public static function getMap()
    {
        return [
            'ID'          => new Entity\IntegerField('ID', [
                'autocomplete' => true,
                'primary'      => true,
            ]),
            'FUSER_ID'    => new Entity\IntegerField('FUSER_ID', [
                'required' => true,
            ]),
            'PRODUCT_ID'  => new Entity\IntegerField('PRODUCT_ID', [
                'required' => true,
            ]),
            'INSERT_TIME' => new Entity\DatetimeField('INSERT_TIME', [
                'default_value' => new DateTime(),
            ]),
        ];
    }
}
