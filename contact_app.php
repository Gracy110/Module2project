<?php

$contacts = [];

//Add contact
function addContact(array &$contacts, string $name, string $email, string $phone): void {
    $contacts[] = ['$name'=> $name, 'email' => $email, 'phone' => $phone];

}

//display contacts

function displayContacts(array $contacts): void{
    if(empty($contacts)){
        echo"No Contacts Available. \n";
    }else{
        foreach($contacts as $contact){
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone:{$contact['phone']}\n";
        }
    }

}

while(true){
    echo "Contact Management Menu\n";
    echo"1. Add Contact\n2. View Contacts\n3. Exit\n";
    $choice = (int)readline("Choose an option: ");

    if($choice === 1){
        $name = readline("enter name: ");
        $email = readline("enter email: ");
        $phone = readline("enter phone: ");
        addContact($contacts, $name, $email,$phone);
        echo "$name added successfully.\n";
    }elseif($choice  === 2){
        displayContacts($contacts);

    }elseif($choice === 3){
        echo "Exiting....\n";
    }else{
        echo "Invalid choice. Please Try Again! \n";
    }
}

?>


 README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Gracy110/Module2project.git
git push -u origin main