import { PropsWithChildren, ReactNode } from 'react';
import { Link } from '@inertiajs/react';
import { User } from '@/types';

export default function Layout({ user, header, children }: PropsWithChildren<{ user: User, header?: ReactNode }>) {

    return (
        <>
            <header className="bg-growthdarkgrey w-full flex flex-col lg:flex-row justify-between gap-y-8 p-4 md:px-12 md:py-4 xl:px-16 xl:py-6">
                <div className="flex justify-center w-full sm:w-6/12 lg:w-3/12">
                    <img src="/assets/growth4change_logo_long.png" alt="Growth 4 change logotype" className="object-contain w-auto h-full" />
                </div>
                <nav>
                    <ul className='flex flex-col sm:flex-row sm:justify-end sm:items-center gap-x-2 md:gap-x-3 lg:gap-x-6 xl:gap-x-12 2xl:gap-x-16 content-center'>
                        <li className='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><Link href='/'>ABOUT</Link></li>
                        <li className='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><Link href='/ecosystem'>ECOSYSTEM</Link></li>
                        <li className='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><Link href='/food-is-politics'>FOOD IS POLITICS</Link></li>
                        <li className='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><Link href='/resources'>RESOURCES</Link></li>
                        <li className='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><Link href='/grow-with-us'>GROW WITH US</Link></li>
                    </ul>
                </nav>
            </header>
            <main>{children}</main>
        </>
    );
}


// <div class="w-full flex flex-col lg:flex-row justify-between gap-y-8">


// </div>
