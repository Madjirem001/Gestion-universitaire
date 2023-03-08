<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PromotionModel;
use App\Models\EtudiantModel;
use App\Models\UtilisateurModel;



class Home extends BaseController
{
	

    public function index()
    {
		
        $model_promotion = new PromotionModel();
        //<!--AJOUTER--!->insert()
        // $data = ['intitule'=>"stage 2"];
        // $model_promotion->insert($data);
        // //<!--LECTURE--!> ->find(findAll)
        // $promotions = $model_promotion->findAll();
        // var_dump($promotions);

        // //<!--MODIFICATION--!>->update()
        // $data =['intitule'=>'stage 5'];
        // $model_promotion->update(7,$data);
        // var_dump($data);
        
        // //<!--SUPPRESSION--!>->delete()
        // var_dump($promotions);
        // $model_promotion->delete(6);

        // $promotions = $model_promotion->findAll();
        // var_dump($promotions);
        return view('Home/accueil');
    }

    /** */  
    public function accueil()
	{
	 	$model_promotion = new PromotionModel();
		$model_etudiant = new EtudiantModel();

		$donnees['total_promotions'] = count($model_promotion->findAll());
		$donnees['total_etudiant'] = count($model_etudiant->findAll());

		return view("Home/accueil", $donnees);
		// return view("Home/accueil", $donnees);
	}

	public function etudiant()
	{
		$model_etudiant = new EtudiantModel();
		$model_promotion = new PromotionModel();					 //ici c'est une instance: new EtudiantModel()
		$data['etudiants'] = $model_etudiant->asArray()->findAll()  ;
		$data['promotions'] = $model_promotion->asArray()->findAll()  ;
		// var_dump($data['etudiants']);
		// die();
		return view("Home/etudiant", $data);
	}

	/** la fonction qui permet de faire insertion d'un etudiant */
	public function ajouter_etudiant(){
		$session = session();
		$nom = $this->request->getVar('nom');
		$postnom = $this->request->getVar('postnom');
		$prenom= $this->request->getVar('prenom');
		$genre = $this->request->getVar('genre');
		$date_naissance = $this->request->getVar('date_naissance');
		$lieu_naissance = $this->request->getVar('lieu_naissance');
		$promotion = $this->request->getVar('intule');
		$id_promotion = $this->request->getvar('id_promotion');

		// var_dump($promotion);
		// die();
		$model_etudiant = new EtudiantModel();
		$model_promotion = new PromotionModel();
		$donnees = ['intitule' => $promotion];											//ici c'est une instance: new EtudiantModel()
		$data = [
			'nom' => $nom,
			'postnom' => $postnom,
			'prenom' => $prenom,
			'genre' => $genre,
			'date_naissance' => $date_naissance,
			'lieu_naissance' => $lieu_naissance,
			// 'promotion' => $promotion, 
			'id_promotion' => $id_promotion
		];
		if ($id = $model_etudiant->insert($data)) {
			$session->setFlashdata('success', 'Okay');
			return redirect()->to(site_url('public/Home/etudiant'));
		} else {
			$session->setFlashdata('error', 'No');
			return redirect()->to(site_url('public/Home/etudiant'));
		}
	}

	/** la fonction qui permet de charger l'identifiant d'un etudiant a modifier  */
	public function modifier_etudiant($id = null){ 
		$model_etudiant = new EtudiantModel(); 	/** ici c'est une instance: new EtudiantModel */ 
		if ($id != null) {
			$data['the_etudiant'] =  $model_etudiant->where(["id" => $id])->first();
			$data['etudiants'] = $model_etudiant->findAll();
			return view("Home/etudiant", $data);
		}
	}

	/** cette fonction fait une mise a jour ou modification de l'etudiant choisi par son identifiant*/
	public function enregistrer_modification_etudiant($id = null){
		if ($id != null) {
			$session = session();
			
			$nom = $this->request->getVar('nom');
			$postnom = $this->request->getVar('postnom');
			$prenom= $this->request->getVar('prenom');
			$genre = $this->request->getVar('genre');
			$date_naissance = $this->request->getVar('date_naissance');
			$lieu_naissance = $this->request->getVar('lieu_naissance');
			$promotion = $this->request->getVar('promotion');
			// $id_promotion = $this->request->getVar('id_promotion');
		
			$model_etudiant = new EtudiantModel();//ici c'est une instance: new EtudiantModel()
			$donnees = [
				'nom' => $nom,
				'postnom' => $postnom,
				'prenom' => $prenom,
				'genre' => $genre,
				'date_naissance' => $date_naissance,
				'lieu_naissance' => $lieu_naissance,
				'promotion' => $promotion, 
				// 'id_promotion' =>$id_promotion
			];
			if ($model_etudiant->update($id,$donnees)) {
				$session->setFlashdata('success', 'Okay');
				return redirect()->to(site_url('public/Home/etudiant'));
			} else {
				$session->setFlashdata('error', 'No');
				return redirect()->to(site_url('public/Home/etudiant'));
			}
		}

	}

	public function profile_etudiant(){
		return view('Home/profile');
	}

	/** la fonction qui permet d'afficher toutes les promotions disponible */
	public function promotion()
	{
		$model_promotion = new PromotionModel();
		$donnees['promotions'] = $model_promotion->findAll();

		return view("Home/promotion", $donnees);
	}

	/** la fonction qui permet de faire insertion d'une promotion */
	public function ajouter_promotion()
	{
		$session = session();
		$intitule = $this->request->getVar("nom");
	
		$model_promotion = new PromotionModel();
		$donnees = ['intitule' => $intitule];
		if ($id = $model_promotion->insert($donnees)) {
			$session->setFlashdata('success', 'Okay');
			return redirect()->to(site_url('public/Home/promotion'));
		} else {
			$session->setFlashdata('error', 'No');
			return redirect()->to(site_url('public/Home/promotion'));
		}
	}

	/** la fonction qui permet de charger identifiant a faire une mise a jour ou modification d'une promotion */
	public function modifier_promotion($id_promotion = null)
	{
		$model_promotion = new PromotionModel();
		if ($id_promotion != null) {
			$donnees['la_promotion'] =  $model_promotion->where(["id_promotion" => $id_promotion])->first();
			$donnees['promotions'] = $model_promotion->findAll();
			return view("Home/promotion", $donnees);
		}
	}

	/** cette fonction fait une mise a jour ou modification de l'identifiant d'une promotion*/
	public function enregistrer_modification_promotion($id_promotion = null)
	{
		if ($id_promotion != null) {
			$intitule = $this->request->getVar("nom");
			$session = session();

			$model_promotion = new PromotionModel();
			$donnees = ['intitule' => $intitule];
			if($model_promotion->update($id_promotion, $donnees)) {
				$session->setFlashdata('success_update', 'Okay');
				return redirect()->to(site_url('public/Home/promotion/'));
			} else {
				$session->setFlashdata('error_update', 'No');
				return redirect()->to(site_url('public/Home/promotion/'));
			}
		}
	}

	/**la fonction qui permet de faire la suppression d'une promotion */
	public function supprimer_promotion($id_promotion = null)
	{
		$session = session();

		if ($id_promotion) {
			$model_promotion = new PromotionModel();
			if($model_promotion->delete($id_promotion)){
				$session->setFlashdata('success_delete','Ok');
				return redirect()->to(site_url('public/Home/promotion'));
			}
			else{
				$session->setFlashdata('error_delete','No');
				return redirect()->to(site_url(('public/Home/promotion')));
			}
		}
		else{

		}
	}
   
	/** fonction Conseil d'orientation */
    public function orientation(){
        return view('Home/orientation');
        
        // trouver des metriques pour les condition
    }
   
	/** fonction profile d'un etudiant appartenant a une promo */
    public function profile(){
        return view('Home/profile');
    }

	public function basic_table(){
		return view('Home/basic_table');
	}
}
