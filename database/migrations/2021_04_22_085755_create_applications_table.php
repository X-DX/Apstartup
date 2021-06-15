 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateApplicationsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('applications', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('user_id');
                $table->string('domain');
                $table->string('company_name');
                $table->string('logo')->nullable();
                $table->string('gender');
                $table->string('dob');
                $table->string('occupation');
                $table->integer('set')->default(0);
                $table->string('photo')->nullable();
                $table->string('address');
                $table->string('district');
                $table->string('state');
                $table->string('country');
                $table->string('webpage')->nullable();
                $table->string('app_id');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('applications');
        }
    }
