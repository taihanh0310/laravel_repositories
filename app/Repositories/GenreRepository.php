<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;
use App\Repositories\Repository;
use App\Genre;
/**
 * Description of GenreRepository
 *
 * @author nthanh
 */
class GenreRepository extends Repository
{
    public function model()
    {
        return Genre::class;
    }

    public function fetchListGenre()
    {
        return $this->all();
        // Eagar loading
        // return $this->with('albums')->all();
    }

    public function getBrowse($genre_name)
    {
        return $this->with('albums')->findBy('name',$genre_name)->first();
    }
    
    public function dummyData()
    {
        $data = [
            [
                'id' => '1', 
                'name' => 'Rock',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '2', 
                'name' => 'Jazz',
                'decscription' => 'Jazz is a type of music which was invented in the United States. Jazz music combines African-American music with European music. Some common jazz instruments include the saxophone, trumpet, piano, double bass, and drums.'
            ],
            [
                'id' => '3', 
                'name' => 'Rock2',
                'decscription' => 'Heavy Metal is a loud, aggressive style of Rock music. The bands who play heavy-metal music usually have one or two guitars, a bass guitar and drums. In some bands, electronic keyboards, organs, or other instruments are used. Heavy metal songs are loud and powerful-sounding, and have strong rhythms that are repeated. There are many different types of Heavy Metal, some of which are described below. Heavy metal bands sometimes dress in jeans, leather jackets, and leather boots, and have long hair. Heavy metal bands sometimes behave in a dramatic way when they play their instruments or sing. However, many heavy metal bands do not like to do this.'
            ],
            [
                'id' => '4', 
                'name' => 'Metal',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '5', 
                'name' => 'Alternative',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '6', 
                'name' => 'Disco',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '7', 
                'name' => 'Blues',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '8', 
                'name' => 'Latin',
                'decscription' => 'Latin American music is the music of all countries in Latin America (and the Caribbean) and comes in many varieties. Latin America is home to musical styles such as the simple, rural conjunto music of northern Mexico, the sophisticated habanera of Cuba, the rhythmic sounds of the Puerto Rican plena, the symphonies of Heitor Villa-Lobos, and the simple and moving Andean flute. Music has played an important part recently in Latin Americas politics, the nueva canción movement being a prime example. Latin music is very diverse, with the only truly unifying thread being the use of Latin-derived languages, predominantly the Spanish language, the Portuguese language in Brazil, and to a lesser extent, Latin-derived creole languages, such as those found in Haiti.'
            ],
            [
                'id' => '9', 
                'name' => 'Pop',
                'decscription' => 'Rock and Roll is a form of rock music developed in the 1950s and 1960s. Rock music combines many kinds of music from the United States, such as country music, folk music, church music, work songs, blues and jazz.'
            ],
            [
                'id' => '10', 
                'name' => 'Classical',
                'decscription' => 'Classical music is a very general term which normally refers to the standard music of countries in the Western world. It is music that has been composed by musicians who are trained in the art of writing music (composing) and written down in music notation so that other musicians can play it. Classical music can also be described as "art music" because great art (skill) is needed to compose it and to perform it well. Classical music differs from pop music because it is not made just in order to be popular for a short time or just to be a commercial success.'
            ],
            
        ];
        
        foreach($data as $art)
        {
            $this->create([
                'id' => $art['id'],
                'name' => $art['name'],
                'decscription' => $art['decscription']
            ]);
        }
    }
}
