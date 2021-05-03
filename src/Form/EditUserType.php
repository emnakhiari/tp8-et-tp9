public function buildForm(FormBuilderInterface $builder, array $options)
 {
 $builder
 ->add('email')
 ->add('roles',ChoiceType::class,[
 'choices' => [
 'Utilisateur' => 'ROLE_USER',
 'Editeur' => 'ROLE_EDITOR',
 'Administrateur' => 'ROLE_ADMIN'
 ],
 'expanded' => true,
 'multiple' => true,
 'label' => 'Rôles'
 ]);
 }