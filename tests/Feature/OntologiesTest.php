<?php

namespace Tests\Feature;

use App\Ontology;
use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class OntologiesTest extends TestCase
{

    /*
    Route::resource('/ontologies', 'OntologyController')->middleware('can:eModelador');
    Route::get('/ontologies/download/{userId}/{ontologyId}', 'OntologyController@downloadXML')->name('ontologies.download')->middleware('can:eModelador');
    Route::get('/ontologies/downloadOWL/{userId}/{ontologyId}', 'OntologyController@downloadOWL')->name('ontologies.downloadOWL')->middleware('can:eModelador');
    Route::put('/ontologies/favourite/{userId}/{ontologyId}', 'OntologyController@saveAsFavourite')->name('ontologies.favourite')->middleware('can:eModelador');
    Route::put('/ontologies/normal/{userId}/{ontologyId}', 'OntologyController@saveAsNormal')->name('ontologies.normal')->middleware('can:eModelador');
    Route::post('/updateOrCreate', 'OntologyController@updateOrCreate');
    */

    public function test_can_see_ontologies_pt()
    {
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $response = $this->get('pt/ontologies');
        $response->assertStatus(200);
    }

    public function test_can_see_ontologies_en()
    {
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $response = $this->get('en/ontologies');
        $response->assertStatus(200);
    }

    public function test_can_see_ontologies_form_pt()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->get('pt/ontologies/' . $ontology->id);
        $response->assertStatus(200);
    }

    public function test_can_see_ontologies_form_en()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->get('en/ontologies/' . $ontology->id);
        $response->assertStatus(200);
    }

    public function test_can_see_ontologies_form_edit_pt()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->get('pt/ontologies/' . $ontology->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_can_see_ontologies_form_edit_en()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->get('en/ontologies/' . $ontology->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_can_delete_ontologies_pt()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->delete('pt/ontologies/' . $ontology->id);
        $response->assertStatus(302);
    }

    public function test_can_delete_ontologies_en()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->delete('en/ontologies/' . $ontology->id);
        $response->assertStatus(302);
    }

    public function test_can_update_ontologies_pt()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->put('pt/ontologies/' . $ontology->id, [$ontology->all()]);
        $response->assertStatus(302);
    }

    public function test_can_update_ontologies_en()
    {
        $faker = \Faker\Factory::create();
        $user = User::inRandomOrder()->first();
        if ($user == null)
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'teste'),
                'categorie' => 'administrador',
            ]);
        Auth::loginUsingId($user->id);

        $ontology = Ontology::inRandomOrder()->first();
        if ($ontology == null) {
            $ontology = new Ontology();
            $ontology->name = $faker->word;
            $ontology->xml_string = $faker->word;
            $ontology->user_id = $user->id;
            $ontology->created_by = $user->name;
            $ontology->favourite = 0;
            $ontology->save();
        }

        $response = $this->put('en/ontologies/' . $ontology->id, [$ontology->all()]);
        $response->assertStatus(302);
    }
}
