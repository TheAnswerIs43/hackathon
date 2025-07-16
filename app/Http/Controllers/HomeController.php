<?php

namespace App\Http\Controllers;

use App\Http\Service\EmailNotificationSender;
use App\Http\Service\PlatformService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return $this->handleView('home');
    }

    public function getProfile()
    {
        return $this->handleView('profile');
    }

    public function getMatches()
    {
        return $this->handleView('matches');
    }

    private function handleView($viewName)
    {
        $user = Auth::user();
        if (!$user->onboarding_completed) {
            $companyData = (new PlatformService())->getCompanyData();
            return view('onboarding', ["user" => $user, 'data_company_mining' => $companyData]);
        }
        return view($viewName, ['user' => $user]);
    }

    public function finishOnboarding(Request $request)
    {
        $data = $request->all();
        Auth::user()->update([
            'onboarding_completed' => true,
            'is_supplier' => $data['is_supplier'] ?? false,
        ]);
        return [
            'success' => true,
            'message' => 'Onboarding completed successfully.'
        ];
    }
}
