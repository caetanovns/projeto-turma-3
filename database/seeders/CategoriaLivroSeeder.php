<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CategoriaLivro;

class CategoriaLivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nome' => 'Ficção Científica', 'descricao' => 'Livros que exploram conceitos científicos e tecnológicos futuristas.'],
            ['nome' => 'Romance', 'descricao' => 'Histórias centradas em relacionamentos amorosos.'],
            ['nome' => 'Mistério', 'descricao' => 'Narrativas que envolvem crimes, investigações e suspense.'],
            ['nome' => 'Fantasia', 'descricao' => 'Livros que apresentam mundos imaginários, magia e criaturas fantásticas.'],
            ['nome' => 'História', 'descricao' => 'Obras que exploram eventos históricos e figuras importantes do passado.'],
            ['nome' => 'Biografia', 'descricao' => 'Relatos da vida de pessoas notáveis, escritas por elas mesmas ou por outros autores.'],
            ['nome' => 'Autoajuda', 'descricao' => 'Livros que oferecem conselhos e estratégias para melhorar a vida pessoal e profissional.'],
            ['nome' => 'Infantil', 'descricao' => 'Livros destinados a crianças, com histórias simples e ilustrações coloridas.'],
            ['nome' => 'Terror', 'descricao' => 'Narrativas que visam assustar e provocar medo no leitor.'],
            ['nome' => 'Poesia', 'descricao' => 'Coleções de poemas que expressam emoções e ideias através de versos.'],
            ['nome' => 'Ciência', 'descricao' => 'Livros que explicam conceitos científicos e descobertas de maneira acessível.'],
            ['nome' => 'Filosofia', 'descricao' => 'Obras que exploram questões fundamentais sobre existência, conhecimento e ética.'],
            ['nome' => 'Religião', 'descricao' => 'Textos sagrados e obras que discutem crenças e práticas religiosas.'],
            ['nome' => 'Negócios', 'descricao' => 'Livros que abordam temas relacionados a empreendedorismo, gestão e economia.'],
            ['nome' => 'Culinária', 'descricao' => 'Livros de receitas e técnicas culinárias para diversos tipos de cozinha.'],
            ['nome' => 'Viagem', 'descricao' => 'Guias e relatos de viagens para diferentes destinos ao redor do mundo.'],
            ['nome' => 'Arte', 'descricao' => 'Livros que exploram diferentes formas de arte, artistas e movimentos artísticos.'],
            ['nome' => 'Esportes', 'descricao' => 'Obras que cobrem diversos esportes, atletas e eventos esportivos.'],
            ['nome' => 'Tecnologia', 'descricao' => 'Livros que discutem avanços tecnológicos e seu impacto na sociedade.'],
            ['nome' => 'Saúde', 'descricao' => 'Livros que fornecem informações sobre bem-estar, nutrição e cuidados com a saúde.'],
            
        ];

        foreach ($categorias as $categoria) {
            CategoriaLivro::updateOrCreate(
                ['nome' => $categoria['nome']],
            $categoria);
        }
    }
}
