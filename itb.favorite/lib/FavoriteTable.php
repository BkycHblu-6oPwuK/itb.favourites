<?
namespace Itb\Favorite;

use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\Type\DateTime;
use Itb\Core\BaseTable;

class FavoriteTable extends BaseTable
{
    public static function getTableName()
    {
        return 'itb_favorite_products';
    }

    public static function getMap()
    {
        return [
            'ID'          => new IntegerField('ID', [
                'autocomplete' => true,
                'primary'      => true,
            ]),
            'FUSER_ID'    => new IntegerField('FUSER_ID', [
                'required' => true,
            ]),
            'PRODUCT_ID'  => new IntegerField('PRODUCT_ID', [
                'required' => true,
            ]),
            'INSERT_TIME' => new DatetimeField('INSERT_TIME', [
                'default_value' => new DateTime(),
            ]),
        ];
    }
}
