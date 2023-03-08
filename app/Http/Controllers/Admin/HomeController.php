<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Message;
use App\Review;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $artist = User::where('id', Auth::user()->id)->first();

        $reviews = Review::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $messages = Message::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        // sezioni messaggi mensili
        $messagesByMonth = [];
        $genMsgCount = 1;
        $febMsgCount = 1;
        $marMsgCount = 1;
        $aprMsgCount = 1;
        $mayMsgCount = 1;
        $junMsgCount = 1;
        $julMsgCount = 1;
        $agoMsgCount = 1;
        $sepMsgCount = 1;
        $ottMsgCount = 1;
        $novMsgCount = 1;
        $decMsgCount = 1;
        foreach ($messages as $message) {
            $dateMsg = new Carbon($message->created_at);
            $monthMsg = $dateMsg->format('M');
            if ($monthMsg == 'Jan') {
                $messagesByMonth['Gennaio'] = [
                    'Mese' => 'Gennaio',
                    'Numero di messaggi' => $genMsgCount++
                ];
            } elseif ($monthMsg == 'Feb') {
                $messagesByMonth['Febbraio'] = [
                    'Mese' => 'Febbraio',
                    'Numero di messaggi' => $febMsgCount++,

                ];
            } elseif ($monthMsg == 'Mar') {
                $messagesByMonth['Marzo'] = [
                    'Mese' => 'Marzo',
                    'Numero di messaggi' => $marMsgCount++,

                ];
            } elseif ($monthMsg == 'Apr') {
                $messagesByMonth['Aprile'] = [
                    'Mese' => 'Aprile',
                    'Numero di messaggi' => $aprMsgCount++,

                ];
            } elseif ($monthMsg == 'May') {
                $messagesByMonth['Maggio'] = [
                    'Mese' => 'Maggio',
                    'Numero di messaggi' => $mayMsgCount++,

                ];
            } elseif ($monthMsg == 'Jun') {
                $messagesByMonth['Giugno'] = [
                    'Mese' => 'Giugno',
                    'Numero di messaggi' => $junMsgCount++,

                ];
            } elseif ($monthMsg == 'Jul') {
                $messagesByMonth['Luglio'] = [
                    'Mese' => 'Luglio',
                    'Numero di messaggi' => $julMsgCount++,

                ];
            } elseif ($monthMsg == 'Aug') {
                $messagesByMonth['Agosto'] = [
                    'Mese' => 'Agosto',
                    'Numero di messaggi' => $agoMsgCount++,

                ];
            } elseif ($monthMsg == 'Sep') {
                $messagesByMonth['Settembre'] = [
                    'Mese' => 'Settembre',
                    'Numero di messaggi' => $sepMsgCount++,

                ];
            } elseif ($monthMsg == 'Oct') {
                $messagesByMonth['Ottobre'] = [
                    'Mese' => 'Ottobre',
                    'Numero di messaggi' => $ottMsgCount++,

                ];
            } elseif ($monthMsg == 'Nov') {
                $messagesByMonth['Novembre'] = [
                    'Mese' => 'Novembre',
                    'Numero di messaggi' => $novMsgCount++,

                ];
            } else {
                $messagesByMonth['Dicembre'] = [
                    'Mese' => 'Dicembre',
                    'Numero di messaggi' => $decMsgCount++,

                ];
            }
        }

        // sezione review mensili

        $reviewsByMonth = [];
        $genRevCount = 1;
        $febRevCount = 1;
        $marRevCount = 1;
        $aprRevCount = 1;
        $mayRevCount = 1;
        $junRevCount = 1;
        $julRevCount = 1;
        $agoRevCount = 1;
        $sepRevCount = 1;
        $ottRevCount = 1;
        $novRevCount = 1;
        $decRevCount = 1;
        foreach ($reviews as $review) {
            $dateRev = new Carbon($review->created_at);
            $monthRev = $dateRev->format('M');
            if ($monthRev == 'Jan') {
                $reviewsByMonth['Gennaio'] = [
                    'Mese' => 'Gennaio',
                    'Numero di recensioni' => $genRevCount++
                ];
            } elseif ($monthRev == 'Feb') {
                $reviewsByMonth['Febbraio'] = [
                    'Mese' => 'Febbraio',
                    'Numero di recensioni' => $febRevCount++,

                ];
            } elseif ($monthRev == 'Mar') {
                $reviewsByMonthh['Marzo'] = [
                    'Mese' => 'Marzo',
                    'Numero di recensioni' => $marRevCount++,

                ];
            } elseif ($monthRev == 'Apr') {
                $reviewsByMonth['Aprile'] = [
                    'Mese' => 'Aprile',
                    'Numero di recensioni' => $aprRevCount++,

                ];
            } elseif ($monthRev == 'May') {
                $reviewsByMonth['Maggio'] = [
                    'Mese' => 'Maggio',
                    'Numero di recensioni' => $mayRevCount++,

                ];
            } elseif ($monthRev == 'Jun') {
                $reviewsByMonth['Giugno'] = [
                    'Mese' => 'Giugno',
                    'Numero di recensioni' => $junRevCount++,

                ];
            } elseif ($monthRev == 'Jul') {
                $reviewsByMonth['Luglio'] = [
                    'Mese' => 'Luglio',
                    'Numero di recensioni' => $julRevCount++,

                ];
            } elseif ($monthRev == 'Aug') {
                $reviewsByMonth['Agosto'] = [
                    'Mese' => 'Agosto',
                    'Numero di recensioni' => $agoRevCount++,

                ];
            } elseif ($monthRev == 'Sep') {
                $reviewsByMonth['Settembre'] = [
                    'Mese' => 'Settembre',
                    'Numero di recensioni' => $sepRevCount++,

                ];
            } elseif ($monthRev == 'Oct') {
                $reviewsByMonth['Ottobre'] = [
                    'Mese' => 'Ottobre',
                    'Numero di recensioni' => $ottRevCount++,

                ];
            } elseif ($monthRev == 'Nov') {
                $reviewsByMonth['Novembre'] = [
                    'Mese' => 'Novembre',
                    'Numero di recensioni' => $novRevCount++,

                ];
            } else {
                $reviewsByMonth['Dicembre'] = [
                    'Mese' => 'Dicembre',
                    'Numero di recensioni' => $decRevCount++,

                ];
            }
        }

        $stats = array_replace_recursive($reviewsByMonth,$messagesByMonth);

        $user = Auth::user();
        return view('admin.home', compact('artist', 'user', 'messages','stats', 'reviews'));
    }
}
