<?php

use App\Http\Controllers\Api\MockApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// | Endpoint                                  | Description                                             |
// | ----------------------------------------- | ------------------------------------------------------- |
// | `GET /api/business-ideas`                 | Returns sample business ideas                           |
// | `GET /api/startup-names`                  | Returns startup names (optionally filter by `category`) |
// | `GET /api/submissions`                    | Returns mock user submissions                           |
// | `GET /api/startup-names?category=Fintech` | Filtered startup names                                  |

Route::get('/business-ideas', [MockApiController::class, 'businessIdeas']);
Route::get('/startup-names', [MockApiController::class, 'startupNames']);
Route::get('/submissions', [MockApiController::class, 'userSubmissions']);
