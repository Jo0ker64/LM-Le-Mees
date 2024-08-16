<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'create-admin',
    description: 'Crée des utilisateurs et les stocke dans la base de données',
)]
class CreateAdminCommand extends Command
{
    private SymfonyStyle $io;

    public function __construct(
        private readonly UserRepository $repository,
        private readonly UserPasswordHasherInterface $hasher
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('username', InputArgument::REQUIRED, 'Pseudo de l\'utilisateur')
            ->addArgument('password', InputArgument::REQUIRED, 'Mot de passe de l\'utilisateur')
        ;
    }

    protected function initialize(InputInterface $input, OutputInterface $output) 
    {
        $this->io = new SymfonyStyle($input, $output);
        
    }


    protected function interact(InputInterface $input, OutputInterface $output) : void
    {
        if(
            null !==  $input->getArgument('username') &&
            null !==  $input->getArgument('password')
        ){
            return;
        }

        $this->io->text('Ajouter un nouvel utilisateur');
        $this->askArgument($input, 'username');
        $this->askArgument($input, 'password', hidden: true);
    }


    private function askArgument(InputInterface $input, string $name, bool $hidden = false) : void
    {
        $value = strval($input->getArgument($name));
        if('' !== $value){
            $this->io->text(sprintf('> <info>%s</info>: $s', $name, $value));
        } else {
            $value = match($hidden){
                false => $this->io->ask($name),
                default => $this->io->askHidden($name)
            };
            $input->setArgument($name, $value);
        }
    }
    
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
    
        $user = new User();
        $user->setUsername($username);
        $user->setPassword($this->hasher->hashPassword($user, $password));
        $user->setRoles(['ROLE_ADMIN']);
    
        $this->repository->save($user);
    
        $this->io->success('Administrateur créé avec succès.');
    
        return Command::SUCCESS;
    }
}
