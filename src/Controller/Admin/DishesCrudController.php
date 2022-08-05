<?php

namespace App\Controller\Admin;

use App\Entity\Dishes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DishesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dishes::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('name'),
            TextEditorField::new('description'),
            NumberField::new('price'),
            TextField::new('image'),
            AssociationField::new('category')
        ];
    }
    
}
