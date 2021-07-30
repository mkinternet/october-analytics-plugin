<?php 

namespace Synder\Analytics;

use Schema;
use October\Rain\Database\Updates\Migration;
use October\Rain\Database\Schema\Blueprint;


class UpdateTablesVersion110 extends Migration 
{

    /**
     * Install
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synder_analytics', function (Blueprint $table) {
            $table->boolean('hide')->default(false)->after('path');
        });
        
        Schema::create('synder_analytics_visitors', function (Blueprint $table) {
            $table->string('os', 255)->nullable()->after('agent');
            $table->string('browser', 255)->nullable()->after('agent');
        });
    }

    /**
     * Uninstall
     *
     * @return void
     */
    public function down()
    {
        // Nothing to do here...
    }
}
