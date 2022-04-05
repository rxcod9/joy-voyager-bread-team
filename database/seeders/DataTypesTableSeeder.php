<?php

namespace Joy\VoyagerBreadTeam\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'teams');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'teams',
                'display_name_singular' => __('joy-voyager-bread-team::seeders.data_types.team.singular'),
                'display_name_plural'   => __('joy-voyager-bread-team::seeders.data_types.team.plural'),
                'icon'                  => 'voyager-bread voyager-bread-team voyager-people',
                'model_name'            => 'Joy\\VoyagerBreadTeam\\Models\\Team',
                // 'policy_name'           => 'Joy\\VoyagerBreadTeam\\Policies\\TeamPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadTeam\\Http\\Controllers\\VoyagerBreadTeamController',
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
