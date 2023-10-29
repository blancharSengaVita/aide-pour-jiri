<?php

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\User;

it('is possible to fetch the jiris belonging to a user', function () {
    $user = User::factory()
        ->has(Jiri::factory(4))
        ->create();
    // Testing the existence of the relationship
    expect($user->jiris)->toHaveCount(4);
});

it('is possible to fetch all the contacts of a user', function () {
    $user = User::factory()->create();
    $jiri = Jiri::factory()->create([
        'user_id' => $user->id,
    ]);
    $contacts = Contact::factory()->count(3)->create([
        'user_id' => $user->id,
    ]);
    $jiri->contacts()->attach($contacts);

    // assert that the use has 3 contacts
    expect($user->contacts()->count())->toBe(3);
});
