<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jot_attributes;
class JobAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            ['id' => 123, 'name' => 'How often will the driver get home?', 'option_type' => 'Option Field', 'options' => 'Daily,Once Every 1-2 Days,Once every 2-3 Days,Weekly,2-3 weeks,21+', 'type' => 'job_detail'],
            ['id' => 124, 'name' => 'Driver Type', 'option_type' => 'Option Field', 'options' => 'Company Solo,Team, Team LP,Lease Purchase,Owner Operator,Trainer,Mentor', 'type' => 'job_detail'],
            ['id' => 125, 'name' => 'Home Time', 'option_type' => 'Option Field', 'options' => 'Sunday,Monday, Tuesday,Wednesday,Thursday,Friday,Saturday', 'type' => 'job_detail'],
            ['id' => 126, 'name' => 'Freight Type', 'option_type' => 'Option Field', 'options' => 'Dry Van', 'type' => 'job_detail'],
            ['id' => 127, 'name' => 'Dedicated Account', 'option_type' => 'Option Field', 'options' => 'Dry Van', 'type' => 'job_detail'],
            ['id' => 128, 'name' => 'Compensation', 'option_type' => 'Option Field', 'options' => 'CMP,Salary,Percentage Pay', 'type' => 'pay_options'],
            ['id' => 129, 'name' => 'Duty Time', 'option_type' => 'Option Field', 'options' => 'something,something,something', 'type' => 'pay_options'],
            ['id' => 130, 'name' => 'Average Weekly Pay', 'option_type' => 'Option Field', 'options' => '$5,000 - 10,000', 'type' => 'pay_options'],
            ['id' => 131, 'name' => 'Average Yearly Pay', 'option_type' => 'Option Field', 'options' => '$5,000 - 10,000', 'type' => 'pay_options'],
            ['id' => 132, 'name' => 'Sign on Bonus', 'option_type' => 'Option Field', 'options' => 'Yes,No', 'type' => 'pay_options'],
            ['id' => 133, 'name' => 'Benefits', 'option_type' => 'Option Field', 'options' => '401(k),Dental Insurance,Health Insurance,Life Insurance,Paid time off,Tuition Reimbursement,Vision Insurance', 'type' => 'job_detail'],
        ];


        foreach($attributes as $r){
            jot_attributes::create($r);
        }
    }
}
