<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\status;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendToEmail;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories= status::all();
        return view('auth.register',compact('categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
              
        $request->validate([
            'No_Hp' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'jumlah_pengunjung' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tanggal' =>['required', 'date'],
            'password' => [ 'confirmed', Rules\Password::defaults()],
            // 'status_id' => 'required|exists:App\Models\status,id',
        ]);
        // dd($request);
        $status = status::where('name', 'belum bayar')->first()->id;

        $passrandom = Str::random(12);
        $total_bayar = $request->jumlah_pengunjung * 10000;
        $user = User::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'No_Hp' => $request->No_Hp,
            'tanggal' => $request->tanggal,
            'jumlah_pengunjung' => $request->jumlah_pengunjung,
            'email' => $request->email,
            'status_id' =>  $status,
            'total_bayar' => ($total_bayar),
            'password' => Hash::make($passrandom),
        ]);
        $email = $request->get('email');
        $status = ('belum bayar');
        // $categories = User::where('status', 'belum bayar')->paginate(10);
        // dd($status);
        $data = ([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'alamat'=> $request->get('alamat'),
            'No_Hp'=> $request->get('No_Hp'),
            'status'=> $status,
            'tanggal'=> $request->get('tanggal'),
            'created_at'=> $request->get('created_at'),
            'jumlah_pengunjung'=> $request->get('jumlah_pengunjung'),
            'total_bayar'=>  $total_bayar,
            'password'=> $passrandom,
            ]);
        // dd($data);
        // Mail::to($request['email'])->send(new SendToEmail($user));
      
        Mail::to($email)->send(new SendToEmail ($data));
        event(new Registered($user));
        
       
     

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
