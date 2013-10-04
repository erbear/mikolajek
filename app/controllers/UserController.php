<?php
class UserController extends BaseController
{
	public function __construct()
	{
		$this->beforeFilter('auth', array(
				'except'=>array('getIndex', 'getLogin', 'postLogin','postRegister', 'getRegister')
			));
	}
	    	
	public function getIndex()
	{
		return View::make('user.index');
	}
	public function getRegister()
	{
		return View::make('user.register');
	}
	public function postRegister()
	{
		$user = new User;
		$user->name = Input::get('login');
		$user->password = Hash::make(Input::get('password'));
		$user = $user->save();
		if ($user)
		{
			return View::make('user.message')->with('message', 'zostales zarejestrowany');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}
	}
	    	
	    	
	public function getLogin()
	{
		return View::make('user.login');
	}
	public function postLogin()
	{
		$credentials = array(
				'name'=> Input::get('login'),
				'password'=> Input::get('password'),
			);
		
		if (Auth::attempt($credentials))
		{
		return View::make('user.message')->with('message','zostałeś zalogowany');
		}else 
		{
		return View::make('user.message')->with('message','logowanie sie nie powiodlo');
		}
	}
	public function getLogout()
	{
		Auth::logout();
		return View::make('user.message')->with('message','zostałeś wylogowany');
   	}
	public function getData()
	{
		$user = Auth::user();
		return View::make('user.data')->with('data', $user->data()->first());
	}
	public function getAddData()
	{
		$user = Auth::user();
		$data = $user->data()->first();
		return View::make('user.adddata')->with('data',$data);
	}
	public function postAddData()
	{
		$user = Auth::user();
		$data = $user->data()->first();
		if (!$data)
		{
			$data = new Data;
		}
		$data->email = Input::get('email');
		$data->tel = Input::get('tel');
		$user->data()->save($data);
		$data = $data->save();
		if ($data)
		{
			return View::make('user.message')->with('message', 'dane zostaly dodane pomyslnie');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}
	}
	public function getAddCompany()
	{
		return View::make('user.addcompany');
	}
	public function postAddCompany()
	{
		$company = new Company;
		$company->name = Input::get('name');
		$company = $company->save();
		if ($company)
		{
			return View::make('user.message')->with('message', 'dane zostaly dodane pomyslnie');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}

	}
	public function getChooseCompany()
	{
		$companies = Company::all();
		return View::make('user.choosecompany')->with('companies', $companies);
	}
	public function postChooseCompany()
	{
		$company = Company::find(Input::get('company_id'));
		$user = Auth::user();
		$company = $user->company()->associate($company);
		$user->save();
		if ($company)
		{
			return View::make('user.message')->with('message', 'dane zostaly dodane pomyslnie');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}
	}
	public function getAddCar()
	{
		return View::make('user.addcar');
		
	}
	    	
	public function postAddCar()
	{
		$user = Auth::user();
		$car = new Car;
		$car->name =  Input::get('name');
		$car = $car->save();
		if ($car)
		{
			return View::make('user.message')->with('message', 'dane zostaly dodane pomyslnie');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}
	}
	public function getChooseCar()
	{
		$cars = Car::all();
		return View::make('user.choosecar')->with('cars', $cars);
	}
	    	
	public function getChooseMyCar()
	{
		$user = Auth::user();
		$cars = Input::get('id');
		foreach ($cars as $car)
		{
			$car = Car::find($car);
			$user->cars()->attach($car);
		}
		$user = $user->save();
		if ($user)
		{
			return View::make('user.message')->with('message', 'dane zostaly dodane pomyslnie');	
		}else
		{
			return View::make('user.message')->with('message', 'wystapil blad, sprobuj jeszcze raz');
		}
	}
	    	
	    	
		
}