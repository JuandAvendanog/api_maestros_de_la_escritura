<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'level_id' => 1,
                'question' => '¿Cuál es una forma incorrecta de conjugar el verbo ayudar?',
                'advice' => 'Recuerda verificar la conjugación de los verbos de forma precisa.',
                'options' => json_encode(['A) Él/Ella/Usted ayudará', 'B) Nosotros/Nosotras ayudábamos', 'C) Ellos/Ellas/Ustedes ayudaron', 'd. Nosotros/Nosotras ayudarán']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál de las siguientes frases tiene una concordancia gramatical errónea?',
                'advice' => 'Analiza cada frase cuidadosamente para detectar la concordancia gramatical.',
                'options' => json_encode(['A) Los libros fueron leídos por ellos.', 'B) El niño que perdió su juguetes.', 'C) La montaña más alta.', 'D) Es importante que tú estudies.']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál de las siguientes palabras no es una preposición?',
                'advice' => 'Recuerda que las preposiciones son palabras que indican la relación entre elementos en una frase.',
                'options' => json_encode(['A) Ante', 'B) Según', 'C) Son', 'D) Hasta']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 1,
                'question' => 'La oración "Él jugaba fútbol todos los domingos." ¿En qué tiempo verbal está?',
                'advice' => 'Recuerda que las preposiciones son palabras que indican la relación entre elementos en una frase.',
                'options' => json_encode(['A) Pretérito imperfecto.', 'B) Futuro', 'C) Pasado', 'D) Pretérito perfecto simple.']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 1,
                'question' => '¿En qué ubicación con respecto al verbo se ubican los pronombres?',
                'advice' => 'Los pronombres pueden ocupar diferentes posiciones en una oración dependiendo del tiempo verbal y la estructura gramatical.',
                'options' => json_encode(['A) Antes', 'B) Antes o después', 'C) Después', 'D) No pueden ir antes ni después del verbo']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál es la correcta estructura de una oración simple?',
                'advice' => 'Recuerda que una oración simple consta de un sujeto, un verbo y un predicado.',
                'options' => json_encode(['A) Sujeto + Verbo + Predicado', 'B) Verbo + Sujeto + Predicado', 'C) Oración simple + Conjunción coordinada + Oración simple', 'D) Sujeto + Verbo']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál es la diferencia entre el presente simple y presente continuo?',
                'advice' => 'Comprender las diferencias entre estos tiempos verbales es importante para usarlos correctamente en la comunicación escrita y oral.',
                'options' => json_encode(['A) Presente simple: Es para acciones habituales. Presente continuo: Para acciones temporales.', 'B) Presente simple: Para acciones generales. Presente continuo: Para acciones en progreso.', 'C) Presente simple: Para hechos generales. Presente continuo: Para acciones en el momento.', 'D) Presente simple: Para acciones presentes. Presente continuo: Para acciones futuras.']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 1,
                'question' => 'Las conjugaciones de modo indicativo, subjuntivo e imperativo con el sujeto "yo" en este orden del verbo vivir son:',
                'advice' => 'Recuerda las conjugaciones verbales en los diferentes modos verbales y personas gramaticales.',
                'options' => json_encode(['A) Yo vivo, yo viva, tú vive.', 'B) Yo vives, yo vivas, yo viva.', 'C) Yo vivimos, yo viváis, yo vivid.', 'D) Yo vivo, yo viva, yo viva.']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuántos y cuál es la secuencia (en orden) de los tiempos verbales?',
                'advice' => 'Repasa los diferentes tiempos verbales en español y su uso en contextos específicos.',
                'options' => json_encode(['A) Pasado, futuro, presente.', 'B) Presente, pasado y futuro.', 'C) Pasado, presente y futuro.', 'D) Futuro, presente y pasado.']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál es el efecto más probable de la falta de coherencia en un texto?',
                'advice' => 'La coherencia es crucial para la comprensión y la efectividad de un texto. Analiza cómo la falta de coherencia puede afectar al lector.',
                'options' => json_encode(['A) La dificultad para entender el mensaje.', 'B) La mejora en la claridad de las ideas.', 'C) La reducción del número de párrafos.', 'D) El aumento de la longitud del texto.']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál de las siguientes opciones no contribuye a la cohesión en un texto?',
                'advice' => 'Recuerda que la cohesión se refiere a la forma en que las partes de un texto se relacionan entre sí de manera lógica y fluida.',
                'options' => json_encode(['A) El uso adecuado de conectores.', 'B) La repetición excesiva de palabras.', 'C) La coherencia en la estructura del texto.', 'D) El empleo consistente de pronombres.']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 1,
                'question' => '¿Cuál es la sintaxis de la frase "El estudiante leyó el libro con atención durante la clase de literatura"?',
                'advice' => 'Analiza la estructura gramatical de la frase para identificar correctamente sus elementos.',
                'options' => json_encode(['A) Sujeto: "El estudiante". Verbo: "lee". Objeto directo: "el libro". Complemento de tiempo: "durante la clase de literatura". Complemento de modo: "con atención".', 'B) Sujeto: "El estudiante". Verbo: "leyó". Objeto directo: "el libro". Complemento de tiempo: " con atención". Complemento de modo: " durante la clase de literatura".', 'C) Sujeto: "leyó". Verbo: "El estudiante". Objeto directo: "el libro". Complemento de tiempo: "durante la clase de literatura". Complemento de modo: "con atención".', 'D) Sujeto: "El estudiante". Verbo: "leyó". Objeto directo: "el libro". Complemento de tiempo: "durante la clase de literatura". Complemento de modo: "con atención".']),
                'correct_answer' => 'd',
            ],

            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes palabras está escrita correctamente?',
                'advice' => 'Recuerda revisar la ortografía y las reglas de acentuación para identificar la opción correcta.',
                'options' => json_encode(['A) Espectroscopia', 'B) Espectroscopía (r)', 'C) Espectroscopìa', 'D) Espectroskopia']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes palabras está escrita incorrectamente?',
                'advice' => 'Analiza cuidadosamente cada opción para identificar la palabra con errores ortográficos.',
                'options' => json_encode(['A) Averigüela (r)', 'B) Averíjuela', 'C) Aberigüela', 'D) Averiguela']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes palabras está escrita incorrectamente debido a una desviación ortográfica intencionada?',
                'advice' => 'Revisa cada opción y considera si hay una palabra que parece estar escrita incorrectamente a propósito.',
                'options' => json_encode(['A) Excecsión', 'B) Excepción', 'C) Exsención (r)', 'D) Exsepción']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes palabras está correctamente acentuada?',
                'advice' => 'Observa la acentuación de cada opción y selecciona la que esté correctamente escrita.',
                'options' => json_encode(['A) Álbum (r)', 'B) Telefóno', 'C) Optímo', 'D) Cesped']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes oraciones utiliza correctamente las mayúsculas?',
                'advice' => 'Observa el uso de mayúsculas en cada opción y selecciona la que esté correctamente escrita según las normas de gramática.',
                'options' => json_encode(['A) El Gerente De Ventas Presentará El Nuevo Producto Al Equipo De Marketing.', 'B) El gerente de ventas presentará el nuevo producto al equipo de marketing. (r)', 'C) El gerente de Ventas Presentará el nuevo producto al Equipo de Marketing.', 'D) El gerente de ventas presentará el nuevo producto al Equipo de marketing.']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 2,
                'question' => '¿Cuál de las siguientes opciones utiliza correctamente los signos de puntuación en un correo electrónico empresarial?',
                'advice' => 'Analiza el uso de signos de puntuación en cada opción y selecciona la que sea más apropiada para un correo electrónico formal.',
                'options' => json_encode(['A) Estimados señores, espero que este mensaje les encuentre bien: Por favor, revisen los documentos adjuntos y háganme saber sus comentarios.', 'B) Estimados señores, espero que este mensaje les encuentre bien. Por favor revisen los documentos adjuntos y háganme saber sus comentarios. (r)', 'C) Estimados señores, espero que este mensaje les encuentre bien; Por favor revisen los documentos adjuntos y háganme saber sus comentarios.', 'D) Estimados señores, espero que este mensaje les encuentre bien, por favor revisen los documentos adjuntos y háganme saber sus comentarios.']),
                'correct_answer' => 'b',
            ],
            [
                'level_id' => 3,
                'question' => 'En el ámbito de la ingeniería industrial, ¿cuál de las siguientes palabras podría considerarse un sinónimo de "optimización" y cuál sería su antónimo?',
                'advice' => 'Considera el significado de cada palabra en el contexto de la ingeniería industrial para identificar los sinónimos y antónimos.',
                'options' => json_encode(['A) Sinónimo: Mejora; Antónimo: Estancamiento', 'B) Sinónimo: Eficiencia; Antónimo: Desperdicio', 'C) Sinónimo: Maximización; Antónimo: Reducción (r)', 'D) Sinónimo: Perfeccionamiento; Antónimo: Estabilidad']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 3,
                'question' => 'En el contexto de la ingeniería, si se menciona que un proyecto "está en fase de diseño conceptual", ¿qué etapa del proyecto se está describiendo?',
                'advice' => 'Recuerda las diferentes etapas de un proyecto de ingeniería para identificar la descripción correcta.',
                'options' => json_encode(['A) La etapa en la que se crean los planos detallados para la construcción.', 'B) La etapa en la que se desarrolla un prototipo funcional del producto.', 'C) La etapa en la que se exploran ideas y conceptos para definir el producto final. (r)', 'D) La etapa en la que se realizan pruebas de funcionamiento del producto.']),
                'correct_answer' => 'c',
            ],
            [
                'level_id' => 3,
                'question' => '¿Cuál de las siguientes palabras se utiliza comúnmente en el contexto de oficina para referirse a un documento que contiene información detallada sobre un proyecto o proceso?',
                'advice' => 'Considera el término que se utiliza con mayor frecuencia en entornos de oficina para describir este tipo de documento.',
                'options' => json_encode(['A) Informe (r)', 'B) Expediente', 'C) Archivo', 'D) Memorando']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 3,
                'question' => 'La simulación es una técnica fundamental en la ingeniería. Facilita la representación y evaluación del comportamiento de sistemas complejos antes de ser construidos físicamente, lo que conlleva ahorros significativos de tiempo y recursos. ¿Cómo se describe la simulación y su importancia en la ingeniería, según el texto?',
                'advice' => 'Analiza la descripción proporcionada para identificar la función y la importancia de la simulación en la ingeniería.',
                'options' => json_encode(['A) Facilita la representación y evaluación de sistemas complejos (r)', 'B) Construir sistemas físicos complejos', 'C) Evita la implementación física de sistemas complejos', 'D) Evaluar sistemas complejos después de ser construidos físicamente']),
                'correct_answer' => 'a',
            ],
            [
                'level_id' => 3,
                'question' => '¿Cuál de las siguientes opciones es una colocación correcta en español?',
                'advice' => 'Identifica la expresión que se utiliza correctamente en español para describir la acción de realizar un examen.',
                'options' => json_encode(['A) Hacer un examen', 'B) Tomar un examen', 'C) Realizar un examen (r)', 'D) Crear un examen']),
                'correct_answer' => 'c',
            ],


        ];

        foreach ($questions as $questionData) {
            DB::table('questions')->insert($questionData);
        }
    }
}
