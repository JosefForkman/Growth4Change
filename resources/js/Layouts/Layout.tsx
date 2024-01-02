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
            <main className='min-h-screen w-full p-4 md:px-12 md:py-4 xl:px-16 xl:py-6'>{children}</main>

            <footer className="grid grid-cols-1 md:grid-cols-3 justify-items-center md:justify-items-start md:items-end gap-y-10 md:gap-x-24 text-white bg-growthdarkgrey pt-8 px-5 md:px-11 xl:px-16 pb-10">

                <p className="font-body text-lg md:text-xl xl:text-2xl max-w-md md:max-w-none md:col-span-full xl:col-span-1">
                    Growth4change unites changemakers to ghetto engineer innvative solutions for urban transformation.
                </p>

                <div className="grid grid-cols-2">
                    <h2 className="font-heading text-2xl col-span-full md:text-3xl xl:text-4xl">Follow US</h2>
                    <a href="/#">
                        {/* <x-fab-instagram className="h-10" /> */}
                    </a>
                    <a href="/#">
                        {/* <x-fab-linkedin className="h-10" /> */}
                    </a>
                </div>

                <div className="flex flex-col items-center md:items-start md:gap-y-4 xl:gap-y-0 xl:col-start-2">
                    <h2 className="font-heading text-2xl md:text-3xl xl:text-4xl">Contact Us</h2>
                    <a href="mailto:info@growth4change.net" className="font-body text-lg md:text-xl xl:text-2xl">info@growth4change.net</a>
                </div>

                <img
                    src='assets/Resurs-1-8.png'
                    alt="Growth4change logo"
                    className="w-64 md:justify-self-end xl:row-span-2 xl:row-start-1 xl:col-start-3" />
                <p className="font-body text-lg md:text-xl xl:text-2xl text-growthlightgrey md:col-span-3 justify-self-center">© Growth4change Est. 2019. All Rights to Reserved.</p>
            </footer>

        </>
    );
}
