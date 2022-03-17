<?php

namespace Joy\VoyagerBreadTarget\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'targets');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'targets',
                'display_name_singular' => __('joy-voyager-bread-target::seeders.data_types.target.singular'),
                'display_name_plural'   => __('joy-voyager-bread-target::seeders.data_types.target.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadTarget\\Models\\Target',
                // 'policy_name'           => 'Joy\\VoyagerBreadTarget\\Policies\\TargetPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadTarget\\Http\\Controllers\\VoyagerBreadTargetController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
