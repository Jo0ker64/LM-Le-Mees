<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'create-admin',
    description: 'Crée des utilisateurs et les stocke dans la base de données',
)]
class CreateAdminCommand extends Command
{
    private SymfonyStyle $io;

    public function __construct()
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
        $this->askArgument($input, 'password');
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
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('Vous avez passé un argument : %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        $io->success('Vous avez une nouvelle commande ! Personnalisez-la maintenant ! Passez --help pour voir vos options.');

        return Command::SUCCESS;
    }
}
