/**
 * Created by Bas on 28-11-2017.
 */

// $(document).ready(function(){
//     @foreach ($cars as $car)
//     $("#clickToChange_{{ $car->id }}").click(function(){
//         // Replace model with input field
//         $("#{{ $car->id }}").replaceWith("<td><input type='text' name='model' size='2' class='form-control' value='{{ ucfirst($car->model) }}'></td>");
//
//         // Replace edit button with save button
//         $("#clickToChange_{{ $car->id }}").replaceWith("<button class='btn btn-success' id='clickToChange_{{ $car->id }}'><span class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span></button>");
//         if($.post('btn_success')){
//             console.log("Fuck you doing?");
//         }
//
//         $(".btn-success").click(function(){
//             $("{{ $car->id }}").replaceWith("<td class='carmodel' id='{{ $car->id }}'>{{ ucfirst($car->model) }}</td>");
//             console.log("Success button");
//         });
//     });
//     @endforeach
// });