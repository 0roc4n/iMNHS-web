<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Student::class;
    public function definition(): array
    {
        return [
            'student_id' => 'STU-' . $this->faker->unique()->numerify('2025-###'),
            'lrn' => '1137'. $this->faker->unique()->numerify('22-###'),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->optional()->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->date('Y-m-d', '2015-01-01'),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'profile_photo' => $this->faker->imageUrl(100, 100, 'people'),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'grade_level' => $this->faker->numberBetween(7, 12),
            'section' => strtoupper($this->faker->randomLetter),
            'admission_date' => $this->faker->date('Y-m-d'),
            'guardian_name' => $this->faker->name,
            'guardian_contact' => $this->faker->phoneNumber,
            'previous_school' => $this->faker->company,
            'remarks' => $this->faker->optional()->sentence,
            'user_id' => null,
        ];
    }
}
